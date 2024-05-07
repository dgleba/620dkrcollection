<template id="IndexComponent">
  <div>

    <!-- <h1>Posts</h1> -->
    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'edit' }" class="btn btn-primary">Create</router-link>
      </div>
    </div><br />

    <table class="table table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th>Title</th>
          <th>Body</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="post in posts" :key="post.id">
          <td>{{ post.id }}</td>
          <td>{{ post.title }}</td>
          <td>{{ post.body }}</td>
          <td>
            <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-primary">Edit</router-link>
          </td>
          <td><button class="btn btn-danger" @click.prevent="deletePost(post.id)">Delete</button></td>
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
    }
  },
  created() {
    let uri = 'http://10.4.71.231:6611/api/api.php/records/blogapp_post?order=id,desc&page=1,5';
    this.axios.get(uri).then(response => {
      console.log(response);
      this.posts = response.data.records;
    }).catch(e => { this.doError(e)  });
  },
  methods: {
    // errors alerts functions..
    doError (e) {
      console.log("catch ~47");
      console.log(e);
      // to keep all errors in an array:  
      this.$root.t_errors.push(e);
      // Show only last error..
      // this.t_errors[0] = (e);
      this.$root.t_error_cnt++;
      console.log(this.$root.t_errors)
      // this.$bvToast.toast(` ${e}`, {variant: 'danger', autoHideDelay: 8000 });
      this.$root.showAlert();
      if (e.response.status === 401) {
        this.$router.push('/login')
      }
    },

    deletePost(id) {
      let uri = `http://localhost:4000/posts/delete/${id}`;
      this.axios.delete(uri).then(response => {
        this.posts.splice(this.posts.indexOf(id), 1);
      });
    }
  }
}
</script>
