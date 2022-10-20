<template>
  <div>
    <!-- <h1>Edit Post</h1> -->
    <form @submit.prevent="updatePost">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Title: </label>
            <input type="text" class="form-control" v-model="post.title">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Body: </label>
            <textarea class="form-control" v-model="post.body" rows="5"></textarea>
          </div>
        </div>
      </div><br />
      <div class="form-group">
        <button class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {

  data() {
    return {
      post: {},
      editing: false
    }
  },
  created() {
    // if an id is passed in, then edit. otherwise create.
    if (typeof this.$route.params.id !== 'undefined') {
      // edit
      this.editing = true;
      let uri = `http://10.4.71.231:6611/api/api.php/records/blogapp_post/${this.$route.params.id}`;
      this.axios.get(uri).then((response) => {
        this.post = response.data;
      }).catch(e => { this.$root.doError(e)  });
    }
    else {
      //create
      console.log("dg201 create..");
    }
  },
  methods: {
    updatePost() {
      if (this.editing) {
        // edit
        let uri = `http://10.4.71.231:6611/api/api.php/records/blogapp_post/${this.$route.params.id}`;
        this.axios.put(uri, this.post).then(response => {
          this.$router.push({ name: 'posts' });
        }).catch(e => { this.$root.doError(e)  });
      }
      else {
        // create 
        let uri = 'http://10.4.71.231:6611/api/api.php/records/blogapp_post';
        this.axios.post(uri, this.post).then(response => {
          this.$router.push({ name: 'posts' });
        }).catch(e => { this.$root.doError(e)  });
      }
    }
  }
}
</script>
