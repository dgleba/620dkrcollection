<template>
  <b-row class="justify-content-md-center">
    <b-col cols="6">
      <h2>Please Login</h2>

      <!-- <ul v-if="t_errors && t_errors.length">
        <li v-for="t_error of t_errors" v-bind:key="t_error">
          <b-alert show>{{t_error.message}}</b-alert>
        </li>
      </ul> -->

      <b-form @submit="onSubmit">
        <b-form-group id="fieldsetHorizontalu" horizontal :label-cols="4" breakpoint="md" label="Enter Username">
          <b-form-input id="username" :state="state" v-model.trim="username"></b-form-input>
        </b-form-group>
        <b-form-group id="fieldsetHorizontalp" horizontal :label-cols="4" breakpoint="md" label="Enter Password">
          <b-form-input type="password" id="password" :state="state" v-model.trim="password"></b-form-input>
        </b-form-group>
        <b-button type="submit" variant="primary">Login</b-button> &nbsp;&nbsp;
        <br><br><br>
        <b-button type="button" variant="success" @click.stop="register()">Register</b-button>
      </b-form>
    </b-col>
  </b-row>
</template>

<script>

export default {
  name: "Login",
  data() {
    return {
      username: "",
      password: "",
    };
  },
  methods: {
    // .
    // . this logs into qtag486 rails app on pmdsdata7 2019-11-09_Sat_00.31-AM
    // .
    onSubmit(evt) {
      evt.preventDefault();
      axios
        .post(`http://10.4.71.231:6461/api/token/`, { username: this.username, password: this.password })
        // .post(`http://10.4.1.228:3000/api/auth/login/`, this.login)
        .then(response => {
          localStorage.setItem("jwtToken", response.data.access);
          localStorage.setItem("jwtusername", this.username);
          // dismiss alerts upon login.
          // this.$root.t_errors = [];
          this.$root.dismissCountDown = 0;
          this.$router.push('/posts')
        })
        .catch(e => {
          console.log(e);
          this.$root.t_errors.push(e);
        });
    },
    register() {
      this.$router.push({
        name: "Register"
      });
    }
  }
};
</script>
