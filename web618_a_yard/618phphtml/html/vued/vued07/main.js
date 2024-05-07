//import { createApp } from 'vue'
import Home from './home.vue.js'
import About from './about.vue.js'
import Index1 from './index1.vue.js'
import Login from './login.vue.js'
import Testget from './testget.vue.js'

// window.setTimeout(function() {
    // $(".alert").fadeTo(100, 0).slideUp(100, function(){
        // $(this).remove(); 
    // });
// }, 4000);

var routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
  { path: '/index1', component: Index1 },
  { path: '/login', component: Login },
  { path: '/tg', component: Testget },
];

const router = VueRouter.createRouter({
           history: VueRouter.createWebHashHistory(),
           routes
    })

const app = Vue.createApp({
 
  data() {
    return {
      t_errors: [],
      t_error_cnt: [],
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: true,
      activeUser: null,
      jwtusername: null,

    }
  },
  async created() {
    await this.refreshActiveUser()
  },
  watch: {
    // everytime a route is changed refresh the activeUser
    '$route': 'refreshActiveUser'
  },

  methods: {
    // errors alerts functions..
    countDownChanged(dismissCountDown) {
      this.dismissCountDown = dismissCountDown
    },
    showAlert() {
      // this.dismissCountDown = this.dismissSecs;
      showDismissibleAlert = true
    },
    doError(e) {
      console.log("catch ~47");
      console.log(e);
      // to keep all errors in an array:  
      this.$root.t_errors.push(e);
      // Show only last error..
      // this.t_errors[0] = (e);
      this.$root.t_error_cnt++;
      console.log(this.$root.t_errors)
      // this.$bvToast.toast(` ${e}`, {variant: 'danger', autoHideDelay: 8000 });
      this.$root.showAlert();
      showDismissibleAlert = true;
      if (e.response.status === 401) {
        this.$router.push('/login')
      }
    },
    login() {
      // this.$auth.loginRedirect()
      this.$router.push('/login')
    },
    async refreshActiveUser() {
      // this.activeUser = await this.$auth.getUser()
      this.activeUser = localStorage.getItem("jwtToken");
      this.activeUsername = localStorage.getItem("jwtusername");
    },

    async logout() {
      // await this.$auth.logout()
      // await this.refreshActiveUser()
      localStorage.removeItem("jwtToken");
      localStorage.removeItem("jwtusername");
      this.$router.push('/')
    }
  }


});

app.use(router)
app.mount('#app')


