// import Vue from 'vue'
import router from './router'
import axios from 'axios'

const client = axios.create({
  baseURL: 'http://192.168.88.60:6035/',
  json: true
})

export default {

  data() {
    return {
      access_token:"",
      t_errors:[]
    };
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
      console.log("api 35");
      console.log(e);
      // this.t_errors.push(e);
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
  deletePost (id) {
    return this.execute('delete', `/posts/${id}.json`)
  }
}
