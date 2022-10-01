var Home = Vue.extend({
  template: '#home'
});

const routes = [
  { path: '/', component: Home},
  { path: '/h', component: hello, name: 'hello'},
]
const router = new VueRouter({
  routes 
});

var app = new Vue({
  // router: router,
  el: '#app',
  components: {
    'hello': window.httpVueLoader('./hello.vue'),
  },  
  data: function () {
    return {
      activeUser: 'aba',
      state: ""
    };  
  },
});
app.use(router);
app.mount('#app');
