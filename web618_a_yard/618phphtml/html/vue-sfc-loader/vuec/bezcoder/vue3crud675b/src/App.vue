<template>
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/edit" class="nav-link">Create Post</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/posts" class="nav-link">Posts</router-link>
        </li>
      </ul>
    </nav><br />

    <!-- Toast/alerts - display several errors. sort reverse and show only 3 of them... -->
    <b-alert :show="dismissCountDown" dismissible variant="warning" @dismissed="dismissCountDown=0"
      @dismiss-count-down="countDownChanged">
      <div v-for="(t_error, index) of t_errors.slice(-3)" v-bind:key=index>
        {{t_error_cnt +index}}: {{t_error.message}}
      </div>
      <b-progress variant="warning" :max="dismissSecs" :value="dismissCountDown" height="3px"></b-progress>
    </b-alert>

    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
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
    }
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
      this.t_errors.push(e);
      // Show only last error..
      // this.t_errors[0] = (e);
      this.t_error_cnt++;
      console.log(this.$root.t_errors)
      // this.$bvToast.toast(` ${e}`, {variant: 'danger', autoHideDelay: 8000 });
      this.showAlert();
      if (e.response.status === 401) {
        this.$router.push('/login')
      }
    },
  }
}
</script>


<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity .5s
}

.fade-enter,
.fade-leave-active {
  opacity: 0
}
</style>

