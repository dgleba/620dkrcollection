<template>
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
              <td>{{ post.updated_at }}</td>
              <td><a href="#" @click.prevent="deletePost(post.id)"> &nbsp; Delete</a></td>
            </tr>
          </tbody>
        </table>
        </b-overlay>
    </b-row>
  </div>
</template>

<script>
// import api from '@/api'
import router from '@/router'
import axios from 'axios'

  // baseURL: 'http://192.168.88.60:6035/',
  const client = axios.create({
    baseURL: `${process.env.VUE_APP_BACKEND_URL}/`,
    json: true
  });

export default {
  data () {
    return {
      loading: false,
      posts: [],
      result: [],
      model: {},
      show: false,
      access_token:"",
      t_errors:[],
      Post_form_is_hidden: true,
    }
  },
  async created () {
    this.refreshPosts()
  },
  methods: {
    async refreshPosts () {
      this.loading = true // for original alert
      this.showoverlay = true // for overlay
      this.posts = await this.getPosts()
      this.loading = false
      this.showoverlay = false
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
        // console log - show raw data returned from the api..
        // if last arg is '' empty then it's all one string. if two spaces then indented two spaces.
        console.log ('executereqdata', JSON.stringify(req.data, null, '' ) )
        //
        // our `post model` json data is in `result` within the overall json response data from fab.
        //
        return req.data.results
      })
      .catch(e => {
        console.log("posts ~153", e);
        // console.log(e);
        this.t_errors.push(e);
        //
        // use boostrap toast to show error for the user.
        //
        this.$bvToast.toast(` ${e}`, {variant: 'danger', autoHideDelay: 15000 });
        if (e.response.status === 401) {
          router.push({
            name: "Login"
          });
        }
      });
    },

    //
    // backend api urls. Edit them here to match up with the backend api.
    // ip address and port are in .env file.
    //
    getPosts () {
      let getallresp = this.execute('get', '/blogapp/api/v1/Post/')
      // console.log(getallresp)
      return getallresp
    },
    getPost (id) {
      return this.execute('get', `/blogapp/api/v1/Post/${id}`)
    },
    apiCreatePost (data) {
      return this.execute('post', '/blogapp/api/v1/Post/', data)
    },
    updatePost (id, data) {
      // strip id out of the data json object
      console.log('data.toupdatepost',data)  
      delete data['id']
      return this.execute('put', `/blogapp/api/v1/Post/${id}`, data)
    },
    dodeletePost (id) {
      return this.execute('delete', `/blogapp/api/v1/Post/${id}`)
    }
    // end backend api urls..

  }
}
</script>
