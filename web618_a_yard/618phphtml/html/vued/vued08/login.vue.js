export default {
template:`
      <h2>Please Login</h2>

      <form @submit="onSubmit"> 
          <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" v-model.trim="username" />
          </div>
          <br>
          
          <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" v-model.trim="password" />
          </div>
          <br>
          
          <button type="submit" class="primary">Login</button> &nbsp;&nbsp;
          <br>
       </form>
`,

  name: "Login",
  data() {
    return {
      username: "",
      password: "",
    };
  },
  methods: {
    onSubmit(evt) {
      evt.preventDefault();
      axios
        .post(`http://10.4.71.231:37461/api/token/`, { username: this.username, password: this.password })
        // .post(`http://10.4.1.228:3000/api/auth/login/`, this.login)
        .then(response => {
          localStorage.setItem("jwtToken", response.data.access);
          localStorage.setItem("jwtusername", this.username);
          // dismiss alerts upon login.
          this.$root.t_errors = [];
          //this.$root.dismissCountDown = 0;
          this.$router.push('/index1')
          this.$root.toast1.hide()
        })
        .catch(e => {
          console.log(e);
          this.$root.doError(e);
        });
    },
    register() {
      this.$router.push({
        name: "Register"
      });
    }
  }
};

