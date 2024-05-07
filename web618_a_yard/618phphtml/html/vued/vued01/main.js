import * as About  from './about.vue.js'
import * as Home  from './home.vue.js'

const app = Vue.createApp({
  components: {
    About,
    Home
  },
    data() {
        return {
            mess: "ciao mondo"
        }
    }
});

var routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
  // { path: '/contact', component: Contact }
];

const router = VueRouter.createRouter({
           history: VueRouter.createWebHashHistory(),
           routes
    })

app.use(router)
app.mount('#app')
