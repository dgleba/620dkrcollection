
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

// var router = new VueRouter({
//   routes:[
//     { path: '/', component: Home},
//     { path: '/pm', component: postsManager},
//     // , name: 'postsManager'
//   ]
// });

const routes= [
  { path: '/', component: Home},
  { path: '/pm', component: postsManager},
  // , name: 'postsManager'
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

// =================================================

var app = new Vue({
  router: router,
  el: '#app',
  components: {
    'hello01': window.httpVueLoader('./hello.vue'),
    'postsManager': window.httpVueLoader('./postsManager.vue'),
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
})



app.use(router);
app.mount('#app');

// =================================================


