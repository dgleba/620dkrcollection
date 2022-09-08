
// this is the Vue.js app
var app = new Vue({
  el: '#app',
  data(){
    return {
      post:{}
    }
  },
  methods: {
    addPost(){
      let uri = 'http://localhost:4000/posts/add';
      this.axios.post(uri, this.post).then(() => {
        this.$router.push({name: 'posts'});
      });
    }
    }
});


