//import { createApp } from 'vue'
import TodoItem from './TodoItem.js'
import About from './about.vue.js'

var routes = [
  // { path: '/', component: Home },
  { path: '/about', component: About },
  // { path: '/contact', component: Contact }
];

const router = VueRouter.createRouter({
           history: VueRouter.createWebHashHistory(),
           routes
    })

const app = Vue.createApp({
  components: {
    TodoItem
  },
  data() {
    return {
      groceryList: [
        { id: 0, text: 'Vegetables' },
        { id: 1, text: 'Cheese' },
        { id: 2, text: 'Whatever else humans are supposed to eat' }
      ]
    }
  }
});

app.use(router)
app.mount('#app')