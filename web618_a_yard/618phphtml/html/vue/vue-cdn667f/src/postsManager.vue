<!-- 
Concepts:
Posts is used below to refer to the list of db records.
Model is used to refer to one record being edited.
Copy and edit this file for another table. 
Why not just keep post and model as generic terms for the db records? 
-->

<template id="postsManager">
  <div class="container-fluid mt-9">
  <div>  
    <!-- <b-toast id="Post-toaster01">{{}}</b-toast> -->
    <span class="mx-2 my-2" >Posts </span>

    <!-- Search bar -->
    <button v-if="Post_form_is_hidden"  class="btn btn-primary ml-4 mt-1 mb-1" @click="createPost()" >Create</button>
      &nbsp <input type="text" v-model="searchterm" placeholder="Search"><button v-on:click="clearsearch">x</button>
      <button @click="getreqdata">Search</button>
      &nbsp Recrds: {{recordcnt}}
  </div>


    <!-- For a full alert bar saying loading.. -->
    <!-- <b-alert :show="loading" variant="info">Loading...</b-alert> -->

    <!-- I don't think I got this one working. -->
    <!-- <b-toast id="loading-toast" title="Dataloading"  static no-auto-hide>
      Loading..
    </b-toast> -->

    <!-- Toast/alerts - display several errors. sort reverse and show only 3 of them... -->
    <b-alert  :show="dismissCountDown"  dismissible  variant="warning"   @dismissed="dismissCountDown=0"  @dismiss-count-down="countDownChanged">
      <div v-for="(t_error, index) of t_errors.slice().reverse().slice(0, 3)" v-bind:key=index>  
        {{index+1}} of {{t_error_cnt}}: {{t_error.message}}
      </div>
      <b-progress   variant="warning"  :max="dismissSecs"   :value="dismissCountDown"  height="3px" ></b-progress>
    </b-alert> 

    <!-- create edit form -->
    <b-row>
      <b-col v-if="!Post_form_is_hidden" lg="3">
        <div :title="(model.id ? 'Edit ID#' + model.id : 'New') ">
          <form @submit.prevent="savePost">
            <b-btn  class="ml-1" type="submit" variant="success" >Save</b-btn> 
            <button v-on:click="Post_form_is_hidden = !Post_form_is_hidden" class="btn btn-warning mr-2 float-right" style="color:red;" >Cancel</button>
            <b-form-group label="Title">
              <b-form-input type="text" v-model="model.title" required ></b-form-input>
            </b-form-group>
            <b-form-group label="Body">
              <b-form-textarea rows="4" v-model="model.body"></b-form-textarea>
            </b-form-group>
          </form>
        </div>
      </b-col>
    </b-row>

    <!-- list view -->
    <b-row>
        <b-overlay :show="showoverlay" class="d-inline-block"  variant="info" opacity="0.27" >
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="text-center">Action:&nbsp;</th>
              <th>ID</th>
              <th>Title</th>
              <th>Updated At</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="post in posts" :key="post.id">
              <td class="text-center">
                <a href="#" @click.prevent="populatePostToEdit(post)">Edit </a> &nbsp; &nbsp;  <span/>
              </td>
              <td>{{ post.id }}</td>
              <td>{{ post.title }}</td>
              <td>{{ post.last_updated }}</td>
              <td><a href="#" @click.prevent="deletePost(post.id)"> &nbsp; Delete</a></td>
            </tr>
          </tbody>
        </table>
        </b-overlay>
    </b-row>
  </div>
</template>


<script>
  
// =================================================

// api data backend settings: 

const client = axios.create({
  baseURL: 'http://10.4.71.231:6611/api/api.php/records',
  json: true
});

const table1 = '/blogapp_post';
// const table1 = '/posts_arc';

// =================================================

export default {

  template: '#postsManager',
  name: 'postsManager',
  data () {
    return {
      loading: false,
      reqdata: {},
      recordcnt: 0,
      posts: [],
      model: {},
      show: false,
      access_token:"",
      t_errors:[],
      t_error_cnt: 0,
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: false,
      Post_form_is_hidden: true,
      polling: null,
      searchterm: ""
    }
  },
  async created () {
    // console.log(`${process.env.VUE_APP_BACKEND_URL}/`);
    this.refreshPosts();
    this.pollData();
  },
  methods: {
    async refreshPosts () {
      this.loading = true // for original alert
      this.showoverlay = true // for overlay
      // For a loading message to give more feedback..
      // this.$bvToast.toast('Loading', {variant: 'danger' });
      this.reqdata = await this.getPosts()
      this.posts = this.reqdata.records
      this.recordcnt = this.reqdata.results
      this.loading = false
      this.showoverlay = false
    },

    async getreqdata () {
      this.reqdata = await this.getPosts()
      this.posts = this.reqdata.records
      this.recordcnt = this.reqdata.results
      // console.log(this.reqdata.results)
    },    
  	clearsearch() {
    	this.searchterm = '';
      this.getreqdata();
    },  
    applysearch() {
    this.filterTable = this.filterInput
    },

    countDownChanged(dismissCountDown) {
        this.dismissCountDown = dismissCountDown
      },
    showAlert() {
      this.dismissCountDown = this.dismissSecs
    },    

    //  poll the api every x seconds to get updated data..
    // https://renatello.com/vue-js-polling-using-setinterval/
    pollData () {
      this.polling = setInterval(() => {
        this.refreshPosts()
      }, 12000)
    }, 

    async populatePostToEdit (post) {
      this.Post_form_is_hidden = false
      this.model = Object.assign({}, post)
    },
    async savePost () {
      if (this.model.id) {
        await this.updatePost(this.model.id, this.model)
      } else {
        await this.apiCreatePost(this.model)
      }
      this.model = {} // reset form
      this.Post_form_is_hidden = true
      await this.refreshPosts()
    },
    async createPost () {
      this.model = {} // reset form
      this.Post_form_is_hidden = false
      // await this.refreshPosts()
    },
    async deletePost (id) {
      if (confirm('Are you sure you want to delete this?')) {
        // if we are editing a record we deleted, remove it from the form
        if (this.model.id === id) {
          this.model = {}
        }
        await this.dodeletePost(id)
        await this.refreshPosts()
      }
    },

    async execute (method, resource, data) {
      // inject the accessToken for each request
      // let accessToken = await Vue.prototype.$auth.getAccessToken()
      this.accessToken = localStorage.getItem("jwtToken");
      return client({
        method,
        url: resource,
        data,
        headers: {
          Authorization: `Bearer ${this.accessToken}`
        }
      })
      .then(req => {
        // uncomment  console.log(req);  to see the whole response for debugging.
        //console.log(req);
        return req.data
      })
      .catch(e => {
        console.log("posts ~187");
        console.log(e);
        // to keep all errors in an array:  
        this.t_errors.push(e);
        // Show only last error..
        // this.t_errors[0] = (e);

        this.t_error_cnt++;
        console.log(this.t_errors)
        // this.$bvToast.toast(` ${e}`, {variant: 'danger', autoHideDelay: 8000 });
        this.showAlert();
        if (e.response.status === 401) {
          router.push({
            name: "Login"
          });
        }
      });
    },

    // backend api urls..

    getPosts () {
      return this.execute('get', `${table1}?search=${this.searchterm}&page=1,50`)
    },
    getPost (id) {
      return this.execute('get', `${table1}/${id}`)
    },
    apiCreatePost (data) {
      return this.execute('post', `${table1}`, data)
    },
    updatePost (id, data) {
      return this.execute('put', `${table1}/${id}`, data)
    },
    dodeletePost (id) {
      return this.execute('delete', `${table1}/${id}`)
    }
    // end backend api urls..


  },
  beforeDestroy () {
    clearInterval(this.polling)
  }
  
};
</script>

<style>
  /* these examples not used here.. */
  .hero {
    height: 50vh;
    display: flex;
    align-items: center;
  }
  .hero .lead {
    font-weight: 200;
  }
</style>
