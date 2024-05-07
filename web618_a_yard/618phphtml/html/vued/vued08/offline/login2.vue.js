export default {

template:`
    <div class="vh-100 d-flex ">
      <div class="container">
        <div class="row d-flex justify-content-center">


  <div class="login">
    <div>
      <form @submit.prevent="submit">
        <div>
          <label for="username">Username:</label>
          <input type="text" name="username" v-model.trim="username" />
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" name="password" v-model.trim="password" />
        </div>
        <button type="submit">Submit</button>
      </form>
      
    </div>
  </div>
        </div>
      </div>
    </div>
`,

  name: "Login",
  data() {
    return {
      username: "",
      password: "",
    };
  },
  methods: {

    login22() {
      localStorage.setItem("localsearchterm", this.searchterm);

      this.accessToken = localStorage.getItem("jwtToken");;
      let head = { headers: {   Authorization: `Bearer ${this.accessToken}`   } };
      let uri = `http://10.4.71.231:37461/menuapp/api/v1/Menu0`;
      console.log(uri);

      axios.get(uri, head).then(response => {
        console.log(response);
        this.dataRows = response.data.results;
        this.recordcnt = response.data.count;
      }).catch(e => { this.$root.doError(e) });
    },
    login1() {
      console.log("u and p",username,password)
      axios.post(`http://10.4.71.231:37461/api/token/`, 
                  { username: this.username, password: this.password })
          .then(response => {
          localStorage.setItem("jwtToken", response.data.access);
          localStorage.setItem("jwtusername", this.username);
          // dismiss alerts upon login.
          // this.$root.t_errors = [];
          // this.$root.dismissCountDown = 0;
          this.$router.push('/')
        })     .catch(e => { this.$root.doError(e) })
    }
  }
};

