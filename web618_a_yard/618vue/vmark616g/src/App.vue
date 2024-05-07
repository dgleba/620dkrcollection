<template>
  <!-- class="container" -->
  <div class="container">
    <div>
      <router-link to="/marks" class="btn btn-primary ml-1">Bmarks</router-link>
      <router-link to="/login" class="btn btn-primary btn-sm ml-1">Login</router-link>
      <a class="btn btn-primary btn-sm ml-1" href="#" @click.prevent="logout">Logouut</a>
      <span class=" justify-content-end ml-1">[ {{ this.activeUsername }} ]</span>
      
    </div>

    <router-view></router-view>
  </div>
</template>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-active {
  opacity: 0;
}
</style>

<script>
export default {
  name: "app",
  data() {
    return {
      activeUser: null,
      jwtusername: null,
    };
  },
  async created() {
    await this.refreshActiveUser();
  },
  watch: {
    // everytime a route is changed refresh the activeUser
    $route: "refreshActiveUser",
  },
  methods: {
    login() {
      // this.$auth.loginRedirect()
      this.$router.push("/Login");
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
      this.$router.push("/");
    },
  },
};

/*
      <router-link to="/markcreate" class="btn btn-primary">Create</router-link>

    <nav class="navbar navbar-dark bg-dark">
      <router-link to="/" class="nav-link">Home</router-link>

      <ul class="navbar-nav xmr-auto">
        <li class="nav-item active">
          <router-link to="/markcreate" class="nav-link">Create</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/marks" class="nav-link">Bmarks</router-link>
        </li>

        <li class="nav-item">
          <router-link to="/login" class="nav-link">Login</router-link>
        </li>

        <li></li>
      </ul>
    </nav>

  <div class="xcollapse xnavbar-collapse" id="navbarsExample03">
      </div>

    <ul class="my-2 my-md-0">
    </ul>

    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/markcreate" class="nav-link">Create</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/marks" class="nav-link">Bmarks</router-link>
        </li>

        <x!-- <li class="nav-item">
           <b-nav-item >  [ {{ this.activeUsername }} ]  </b-nav-item> 
          <b-nav-item class="ml-auto" href="#" @click.prevent="login" v-if="!activeUser">Login</b-nav-item>
        </li> -->

        <!-- <li class="nav-item">
          <router-link to="/login" class="nav-link">Login</router-link>
        </li>
        <li class="nav-item">  
          
          <a class="nav-link" href="#" @click.prevent="logout">Logouut</a>
        </li>

        <a class="navbar-brand"  href="#">  - -</a>
        <p class="navbar-text justify-content-end ">[ {{ this.activeUsername }} ]</p> 
      </ul>
    </nav><br /> -->




<router-link to="/logout" class="nav-link">Logout</router-link>
<a class="navbar-brand" href="#">Always expand</a>
        <li class="nav-item">  [ {{ this.activeUsername }} ]  </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

xnavbar-expand-sm 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

*/
</script>
