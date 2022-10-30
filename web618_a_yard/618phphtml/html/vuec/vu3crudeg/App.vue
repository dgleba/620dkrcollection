
<template >
  <div id="app">

    <nav class="navbar navbar-expand-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/index">Posts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- routes will be rendered here -->
    <router-view />
  </div>
  <!-- <hello01></hello01> -->
</template>

<script>
export default {
  data() {
    return {
      t_errors: [],
      t_error_cnt: [],
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: false,
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
      this.dismissCountDown = this.dismissSecs
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
}

/*
notes:
navbar-expand-lg navbar-light bg-light
*/

</script>
  