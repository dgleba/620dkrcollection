//import { createApp } from 'vue'
import Home from './home.vue.js'
import About from './about.vue.js'
import Todo from './todo.vue.js'

var routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
  { path: '/todo', component: Todo },
];

const router = VueRouter.createRouter({
           history: VueRouter.createWebHashHistory(),
           routes
    })

const app = Vue.createApp({
 
  data() {
    return {
      groceryList00: [
        { id: 0, text: 'choco' },
      ]
    }
  }
});

app.use(router)
app.mount('#app')