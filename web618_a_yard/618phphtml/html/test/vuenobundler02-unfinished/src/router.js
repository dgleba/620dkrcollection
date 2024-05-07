import Vue from 'vue'
import Router from 'vue-router'

import Hello from '@/components/Hello'
import PostsManager from '@/components/PostsManager'

import Login from "@/components/Login";
import Register from "@/components/Register";


// import Auth from '@okta/okta-vue'

// Vue.use(Auth, {
//   issuer: 'https://{yourOktaDomain}/oauth2/default',
//   client_id: '{yourClientId}',
//   redirect_uri: 'http://localhost:8080/implicit/callback',
//   scope: 'openid profile email'
// })

Vue.use(Router)

let router = new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: Hello
    },

    {
      path: '/posts',
      name: 'Posts',
      component: PostsManager,
      meta: {
        requiresAuth: true
      }
    },

    {
      path: "/login",
      name: "Login",
      component: Login
    },
    {
      path: "/register",
      name: "Register",
      component: Register
    }
  ]
})

// router.beforeEach(Vue.prototype.$auth.authRedirectGuard())

export default router
