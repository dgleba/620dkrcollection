<template>
  <div class="container-fluid mt-9">
    <h4 class="h4">Posts</h4>
    <!-- <b-alert :show="loading" variant="info">Loading...</b-alert> -->
      <ul v-if="t_errors && t_errors.length">
        <li v-for="t_error of t_errors" v-bind:key="t_error">
          <b-alert show>{{t_error.message}}</b-alert>
        </li>
      </ul>
    <b-row>
      <b-col>
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
      </b-col>
      <b-col lg="3">
        <div :title="(model.id ? 'Edit ID#' + model.id : 'New') ">
          <form @submit.prevent="savePost">
            <b-btn type="submit" variant="success">Save</b-btn> 
            <b-form-group label="Title">
              <b-form-input type="text" v-model="model.title"></b-form-input>
            </b-form-group>
            <b-form-group label="Body">
              <b-form-textarea rows="4" v-model="model.body"></b-form-textarea>
            </b-form-group>
          </form>
        </div>
      </b-col>
    </b-row>
  </div>
</template>

<script>
// import api from '@/api'
import router from '@/router'
import axios from 'axios'

  const client = axios.create({
    baseURL: 'http://192.168.88.60:6035/',
    json: true
  });

export default {
  data () {
    return {
      loading: false,
      posts: [],
      model: {},
      show: false,
      access_token:"",
      t_errors:[]
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
      this.model = Object.assign({}, post)
    },
    async savePost () {
      if (this.model.id) {
        await this.updatePost(this.model.id, this.model)
      } else {
        await this.createPost(this.model)
      }
      this.model = {} // reset form
      await this.refreshPosts()
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
        return req.data
      })
      .catch(e => {
        console.log("posts 120");
        console.log(e);
        this.t_errors.push(e);
        if (e.response.status === 401) {
          router.push({
            name: "Login"
          });
        }
        // return this.t_errors;
      });
    },
    getPosts () {
      return this.execute('get', '/posts.json')
    },
    getPost (id) {
      return this.execute('get', `/posts/${id}.json`)
    },
    createPost (data) {
      return this.execute('post', '/posts.json', data)
    },
    updatePost (id, data) {
      return this.execute('put', `/posts/${id}.json`, data)
    },
    dodeletePost (id) {
      return this.execute('delete', `/posts/${id}.json`)
    }

  }
}
</script>
