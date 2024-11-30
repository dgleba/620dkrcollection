
<template id="postsManager">
  <div class="container-fluid mt-9">
  <div>  
    <!-- <b-toast id="Post-toaster01">{{}}</b-toast> -->
    <span class="mx-2 my-2" >Posts </span>

    <button v-if="Post_form_is_hidden"  class="btn btn-primary ml-4 mt-1 mb-1" @click="createPost()" >Create</button>
    <!-- <a href="#" @click.prevent="createPost()">Create </a> -->
    <!-- <button v-on:click="Post_form_is_hidden = false">Create</button> -->
    <!-- <button v-on:click="Post_form_is_hidden = !Post_form_is_hidden">Toggle hide form</button> -->
  </div>

    <!-- // error messages area. toast, alert, .. -->
    <!-- <b-alert :show="loading" variant="info">Loading...</b-alert> -->
    <!-- . -->
    <!-- alert style here. toast style down in script. -->
      <!-- <div v-if="t_errors && t_errors.length">
        <div v-for="t_error of t_errors" v-bind:key="t_error">
          <b-alert dismissible show>{{t_error.message}}</b-alert>
        </div>
      </div> -->

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
  
export default {

  template: '#postsManager',
  name: 'postsManager',
  data () {
    return {
      loading: false,
      posts: [],
      model: {},
      show: false,
      access_token:"",
      t_errors:[],
      Post_form_is_hidden: true,
      polling: null
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
      this.posts = await this.getPosts()
      this.loading = false
      this.showoverlay = false
    },

    //  poll the api every x seconds to get updated data..
    // https://renatello.com/vue-js-polling-using-setinterval/
    pollData () {
      this.polling = setInterval(() => {
        this.refreshPosts()
      }, 95000)
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
        // console.log(req);
        return req.data.records
      })
      .catch(e => {
        console.log("posts ~147");
        console.log(e);
        this.t_errors.push(e);
        this.$bvToast.toast(` ${e}`, {variant: 'danger', autoHideDelay: 15000 });
        if (e.response.status === 401) {
          router.push({
            name: "Login"
          });
        }
      });
    },

    // backend api urls..

    getPosts () {
      return this.execute('get', `${table1}`)
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
  .hero {
    height: 50vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  .hero .lead {
    font-weight: 200;
    font-size: 1.6rem;
  }
</style>
