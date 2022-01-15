<template>
  <b-row class="justify-content-md-center">
    <b-col cols="6">
      <h3>Please Register</h3>

      <hr/>
      <hr/>
      <hr/>
      <h2>Register is currently not active.</h2>
      <hr/>
      <hr/>
      <hr/>

      <ul v-if="t_errors && t_errors.length">
        <li v-for="t_error of t_errors" v-bind:key="t_error">
          <b-alert show>{{t_error.message}}</b-alert>
        </li>
      </ul>

      <b-form @submit="onSubmit">
        <b-form-group
          id="fieldsetHorizontal"
          horizontal
          :label-cols="4"
          breakpoint="md"
          label="Enter Username"
        >
          <b-form-input id="username" :state="state" v-model.trim="register.username"></b-form-input>
        </b-form-group>
        <b-form-group
          id="fieldsetHorizontal"
          horizontal
          :label-cols="4"
          breakpoint="md"
          label="Enter Password"
        >
          <b-form-input
            type="password"
            id="password"
            :state="state"
            v-model.trim="register.password"
          ></b-form-input>
        </b-form-group>
        <!-- 
          turned this off for now...
          <b-button type="submit" variant="primary">Register</b-button>   -->
        <span>&nbsp;</span> <span>&nbsp;</span> <span>&nbsp;</span>
        <b-button type="button" class="float-right" variant="success" @click="$router.go(-1)">Cancel</b-button>
      </b-form>
    </b-col>
  </b-row>
</template>

<script>
import axios from "axios";

export default {
  name: "Register",
  data() {
    return {
      register: {},
      t_errors: [],
      state: ""
    };
  },
  methods: {
    onSubmit(evt) {
      evt.preventDefault();
      axios
        .post(`${process.env.VUE_APP_BACKEND_URL}/users/sign_up.json`, this.register)
        .then(response => {
          // Just doing something with response.
          localStorage.setItem("register_response", response.data);
          alert("Registered successfully");
          this.$router.push({
            name: "Login"
          });
        })
        .catch(e => {
          console.log(e);
          this.errors.push(e);
        });
    }
  }
};
</script>
