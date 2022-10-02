Vue.use(httpVueLoader);
httpVueLoader.register(Vue, 'hello.vue');

var Home = Vue.extend({
  template: '#home'
});

const routes = [
  { path: '/', component: Home},
  { path: '/h', component: hello, name: 'hello'},
]
const router = new VueRouter({
  routes   //  short for `routes: routes`
});

var app = new Vue({
  router,
  el: '#app',
  // components: {
  //   'hello': window.httpVueLoader('./hello.vue'),
  // },  
  data: function () {
    return {
      activeUser: 'aba',
      state: ""
    };  
  },
});
app.use(router);
app.mount('#app');
