// =================================================
/*

This is a small vue app to edit a table in one component.
There is not auth/login on the table.

References:

started from https://github.com/nlware/vue-crud-ui 

https://github.com/dgleba/550dkrcolbrail/blob/main/vue-eg-552-yards/vue-eg-552-b-yard/vue-eg-552cdjango/src/components/PostsManager.vue

https://github.com/dgleba/MEVNCRUDExample

*/
// =================================================

// api data backend : 

const client = axios.create({
  baseURL: 'http://10.4.71.231:6611/api/api.php/records',
  json: true
});

const table1 = '/blogapp_post';


// =================================================

var Home = Vue.extend({
  // mixins: [util],
  template: '#home'
});

// =================================================

var postsMgr = Vue.extend({
  template: '#postsMgr',
  name: 'postsMgr',
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
  
});

// =================================================

var router = new VueRouter({
  // linkActiveClass: 'active',
  routes:[
    { path: '/', component: Home},
    { path: '/pm', component: postsMgr, name: 'postsMgr'},
  ]
});

// =================================================

var app = new Vue({
  router: router,
  el: '#app',

  components: {
    'hello01': window.httpVueLoader('./hello.vue')
  },  
  data: function () {
    return {
      activeUser: 'aba',
      username: "",
      password: "",
      login: {},
      t_errors: [],
      state: ""
    };  
  },


}).$mount('#app');

// =================================================

