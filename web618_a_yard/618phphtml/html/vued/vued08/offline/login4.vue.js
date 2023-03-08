export default {
template:`
  <form @submit="onSubmit"> 
    <div >
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
              <div class="card-body p-5">
                <form class="mb-3 mt-md-4">
                  <h2 class="fw-bold mb-2 text-uppercase "> login4 </h2>
                  <p class=" mb-5">Please enter your login and password.</p>
                  <div class="mb-3">
                    <label for="username" class="form-label ">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="username" v-model.trim="username"/>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="*" v-model.trim="password"/>
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

  // name: "Login",
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
          // this.$root.t_errors = [];
          //this.$root.dismissCountDown = 0;
          this.$router.push('/index1')
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

// class="vh-100 d-flex "
