import Vue from 'vue'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap.min.css'
// import 'bootstrap/dist/css/bootstrap.min.js'

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);

Vue.config.productionTip = false;

import HomeComponent from './components/HomeComponent.vue';
import CreateComponent from './components/CreateComponent.vue';
import IndexComponent from './components/IndexComponent.vue';
import EditComponent from './components/EditComponent.vue';

import BookmkIndexComponent from './components/BookmkIndexComponent.vue';
import BookmkCreateComponent from './components/BookmkCreateComponent.vue';
import BookmkPwaCreateComponent from './components/BookmkPwaCreateComponent.vue';

import Login from "@/components/Login";
import Register from "@/components/Register";


const routes = [
  {
    path: "/login",
    name: "Login",
    component: Login
  },
  {
    path: "/register",
    name: "Register",
    component: Register
  },

  {
    name: 'home',
    path: '/',
    component: HomeComponent
  },

  {
    name: 'marks',
      path: '/marks',
        component: BookmkIndexComponent,
          meta: {
      requiresAuth: true
    }
  },
  {
    name: 'markcreate',
      path: '/markcreate',
        component: BookmkCreateComponent,
          meta: {
      requiresAuth: true
    }
  },
  {
    name: 'pwamarkcreate',
      path: '/pwamarkcreate',
        component: BookmkPwaCreateComponent,
          meta: {
      requiresAuth: true
    }
  },

  {
    name: 'create',
      path: '/create',
        component: CreateComponent,
          meta: {
      requiresAuth: true
    }
  },
  {
    name: 'posts',
      path: '/posts',
        component: IndexComponent,
          meta: {
      requiresAuth: true
    }
  },
  {
    name: 'edit',
      path: '/edit/:id',
        component: EditComponent
  }
];


/*
  Determine if browser supports a Service Worker,
  if so, register it for the PWA
  from unmark  ./assets/js/unmark.pwa.js:3:  
*/
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }).catch(function(err) {
      // registration failed :(
      //console.log('ServiceWorker registration failed: ', err);
    });
  });
}


const router = new VueRouter({ mode: 'history', routes: routes });

new Vue(Vue.util.extend({ router }, App)).$mount('#app');

console.log('~20 main env');
console.log(JSON.stringify(process.env, null, 2));

