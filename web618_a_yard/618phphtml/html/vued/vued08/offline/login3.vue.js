export default {

template:`
  <form @submit="onSubmit"> 
    <div class="vh-100 d-flex ">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
              <div class="card-body p-5">
                <form class="mb-3 mt-md-4">
                  <h2 class="fw-bold mb-2 text-uppercase "> </h2>
                  <p class=" mb-5">Please enter your login and password.</p>
                  <div class="mb-3">
                    <label for="username" class="form-label ">Username</label>
                    <input type="username" class="form-control" id="username" placeholder="username" v-model.trim="username">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="*" v-model.trim="password">
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-outline-dark" >Login</button> &nbsp;&nbsp;
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    onSubmit(evt) {
      console.log("u and p",username,password)
      console.log(username,password)
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

                    // <button type="submit" class="btn btn-outline-dark" >Login</button>
