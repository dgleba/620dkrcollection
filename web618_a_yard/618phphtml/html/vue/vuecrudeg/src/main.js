// import Vue from 'vue'
// import App from './App.vue'
// import 'bootstrap/dist/css/bootstrap.min.css'

// import VueRouter from 'vue-router';
// Vue.use(VueRouter);

// import VueAxios from 'vue-axios';
// import axios from 'axios';

// Vue.use(VueAxios, axios);

const options = {
    moduleCache: { vue: Vue },
  
    async getFile(url) {
      const res = await fetch(url);
      if ( !res.ok ) {
        throw Object.assign(new Error(res.statusText + ' ' + url), { res });
      }
      return {
        getContentData: (asBinary) => asBinary ? res.arrayBuffer() : res.text(),
      }
    },
    addStyle: () => {},
  }
  
  // =================================================
  
  var Home = Vue.extend({
    // mixins: [util],
    template: '#home'
  });
  
  // =================================================
  
  function load(path) {
    return window['vue2-sfc-loader'].loadModule(path, options);
  }
  
  Vue.use(VueRouter);
  
  // =================================================
  
  load('./src/App.vue')
  .then(app => {
    const router = new VueRouter({
      //mode: 'history',
      mode: 'hash',
      routes: [
        { path: '/', component: () => load('./src/HomeComponent.vue') },
        { path: '/create',  name: 'create', component: () => load('./src/CreateComponent.vue') },
        { path: '/posts',  name: 'posts', component: () => load('./src/IndexComponent.vue') },
        { path: '/edit',  name: 'edit', component: () => load('./src/EditComponent.vue') },
      ]
    })
    new Vue({ ...app, router }).$mount('#app')
  });
  