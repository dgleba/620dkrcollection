<template>
  <div>
    <h3>Create Bookmark616</h3>
    <form @submit.prevent="addBookmk">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>URL:</label>
            <input type="text" class="form-control" v-model="bookmk.url" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Title:</label>
            <input type="text" class="form-control" v-model="bookmk.title" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Body:</label>
            <textarea class="form-control" v-model="bookmk.body" rows="8"></textarea>
          </div>
        </div>
      </div>
      <br />
      <div class="form-group">
        <button class="btn btn-primary btn-lg">Create</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios'

  export default {
      data(){
      return {
        bookmk:{}
      }
  },
  async created () {
      this.accessToken = localStorage.getItem("jwtToken");
      console.log(this.accessToken);

      // Redirect to login if need be..
      if (!this.accessToken) {
          // User not logged in
          this.$router.push({name: 'Login'});
        } 

      console.log("url=", this.$route.query.url)
      console.log("text=", this.$route.query.text)
      console.log("sourcei=", this.$route.query.sourcei)

      //
      // Get query parameters from the url or the android pwa share_target in manifest.json
      // 
      //
      if(this.$route.query.sourcei === 'pwa') {
        this.bookmk.title=this.$route.query.title
        this.bookmk.body=this.$route.query.description
        // url in android chrome comes as item `text`
        // this.bookmk.url=this.$route.query.text
        this.bookmk.url=this.$route.query.text
        }
      else {
        this.bookmk.title=this.$route.query.title
        this.bookmk.body=this.$route.query.description
        this.bookmk.url=this.$route.query.url
      }

      // https://chodounsky.com/2019/03/24/progressive-web-application-as-a-share-option-in-android/
      var parsedUrl = new URL(window.location.toString());
      console.log('Title shared: ' + parsedUrl.searchParams.get('name'));
      console.log('Text shared: ' + parsedUrl.searchParams.get('description'));
      console.log('URL shared: ' + parsedUrl.searchParams.get('link'));
      console.log('URL shared: ' + parsedUrl.searchParams.get('text'));


      // const instance = axios.create({
      //   baseURL:  `${process.env.VUE_APP_BACKEND_URL}`,
      //   timeout: 5000,
      //     headers: {
      //       Authorization: `Bearer ${this.accessToken}`
      //     }
      // });

  },
  methods: {
    addBookmk(){
      this.accessToken = localStorage.getItem("jwtToken");
      let uri = `${process.env.VUE_APP_BACKEND_URL}/mark616/api/v1/bookmk/`;
      this.axios( { method: 'post', url: uri, data: this.bookmk, 
          headers: {
            Authorization: `Bearer ${this.accessToken}`
          }
        }
      )
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      })
      .then(() => {
        this.$router.push({name: 'marks'});
      });
    }

  }

}
</script>
