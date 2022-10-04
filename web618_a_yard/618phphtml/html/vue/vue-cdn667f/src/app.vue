
<template >
  <div id="app">
    <b-navbar toggleable="md" type="dark" variant="dark">
      <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
      <b-navbar-brand to="/">Vue</b-navbar-brand>
      <b-collapse is-nav id="nav_collapse">
        <b-navbar-nav>
          <b-nav-item to="/">Home</b-nav-item>
          <b-nav-item to="/pm">Posts</b-nav-item>
        </b-navbar-nav>

           <b-navbar-nav class="ml-auto">
             <b-nav-item >  [ {{ this.activeUsername }} ]  </b-nav-item>
          <b-nav-item class="ml-auto" href="#" @click.prevent="login" v-if="!activeUser">Login</b-nav-item>
          <b-nav-item class="ml-auto" href="#" @click.prevent="logout" v-else>Logout </b-nav-item>
        </b-navbar-nav>

      </b-collapse>
    </b-navbar>
    <!-- routes will be rendered here -->
    <router-view />
  </div>
  <!-- <hello01></hello01> -->
</template>

<script>
  export default {
    name: 'app',
    data () {
      return {
        activeUser: 'aba',
        activeUser: null,
        jwtusername: null,
      }
    },
    
    async created () {
      await this.refreshActiveUser()
    },
    watch: {
      // everytime a route is changed refresh the activeUser
      '$route': 'refreshActiveUser'
    },
    methods: {
      login () {
        // this.$auth.loginRedirect()
        this.$router.push('/Login')
      },
      async refreshActiveUser () {
        // this.activeUser = await this.$auth.getUser()
        this.activeUser = localStorage.getItem("jwtToken");
        this.activeUsername = localStorage.getItem("jwtusername");
      },
  
      async logout () {
        // await this.$auth.logout()
        // await this.refreshActiveUser()
        localStorage.removeItem("jwtToken");
        localStorage.removeItem("jwtusername");
        this.$router.push('/')
      }
    }
  }
  </script>
  