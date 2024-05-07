<template>
  <div>
    <div class="row">
      <div class="col-md-10"><h3>Posts</h3></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Post</router-link>
      </div>
    </div>
    <br />

    <table class="table table-hover">
      <thead>
        <tr>
          <th>Title</th>
          <th>Body</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="post in posts" :key="post._id">
          <td>{{ post.title }}</td>
          <td>{{ rmpunctuation(post.body) }}</td>
          <td><router-link :to="{ name: 'edit', params: { id: post.id } }" class="btn btn-primary">Edit</router-link></td>
          <td><button class="btn btn-danger" @click.prevent="deletePost(post._id)">Delete</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
    };
  },
  created() {
    // get list..
    // let uri = `${process.env.VUE_APP_BACKEND_URL}/blogapp/api/v1/Post/`;
    // console.log(uri);
    // this.axios.get(uri).then((response) => {
    //   this.posts = response.data;
    // });

    this.accessToken = localStorage.getItem("jwtToken");
    let uri = `${process.env.VUE_APP_BACKEND_URL}/blogapp/api/v1/Post/`;
    this.axios( { method: 'get', url: uri,
        headers: {
          Authorization: `Bearer ${this.accessToken}`
        }
      }
    )
    .then((response) => {
      this.posts = response.data.results;
      })
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    })
    .then(() => {
      this.$router.push({name: 'posts'});
    });
  },
  methods: {
    deletePost(id) {
      let uri = `http://localhost:4000/posts/delete/${id}`;
      this.axios.delete(uri).then((response) => {
        this.posts.splice(this.posts.indexOf(id), 1);
      });
    },
    rmpunctuation(ss) {
      return  ss.replace(/[.,/#!$%^&*;:{}=\-_`~()]/g,"");
    },
    


  },
};
</script>
