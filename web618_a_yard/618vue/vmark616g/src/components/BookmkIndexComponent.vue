<template>
  <div>
    <div class="row">
      <div class="col-md-10"><h5>Bookmks v-20</h5></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'markcreate' }" class="btn btn-success">Create</router-link>
      </div>
    </div>
    <br />

    <table class="table table-hover">
      <thead>
        <tr>
          <th>Title</th>
          <th>URL</th>
          <th>Body</th>
          <th>Created</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="bookmk in bookmks" :key="bookmk.id">
          <td>{{ bookmk.title | truncatepunc(100, '')  }}</td>
          <td>{{ bookmk.url | truncatepunc(100, '') }}</td>
          <td>{{ bookmk.body | truncatepunc(100, '')  }}</td>
          <td>{{ bookmk.created_at  | dateformat2() }}</td>
          <td><router-link :to="{ name: 'edit', params: { id: bookmk.id } }" class="btn btn-primary">Edit</router-link></td>
          <!-- <td><button class="btn btn-danger" @click.prevent="deleteBookmk(bookmk._id)">Delete</button></td> -->
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import dayjs from "dayjs";


export default {
  data() {
    return {
      bookmks: [],
      nopunc:''
    };
  },
  created() {
    // get list..
    // let uri = `${process.env.VUE_APP_BACKEND_URL}/blogapp/api/v1/Bookmk/`;
    // console.log(uri);
    // this.axios.get(uri).then((response) => {
    //   this.bookmks = response.data;
    // });

    this.accessToken = localStorage.getItem("jwtToken");
    let uri = `${process.env.VUE_APP_BACKEND_URL}/mark616/api/v1/bookmk/`;
    this.axios( { method: 'get', url: uri,
        headers: {
          Authorization: `Bearer ${this.accessToken}`
        }
      }
    )
    .then((response) => {
      this.bookmks = response.data.results;
      })
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    })
    .then(() => {
      this.$router.push({name: 'marks'});
    });
  },

  filters: {
    // Truncate text in template.. https://stackoverflow.com/questions/35070271/vue-js-components-how-to-truncate-the-text-in-the-slot-element-in-a-component
    truncate: function(text, length, suffix) {
      text = text || "."; // ref. https://github.com/imcvampire/vue-truncate-filter/issues/10 - fails on null
      return text.substring(0, length) + suffix;
    },
    truncateclean: function(text, length, suffix) {
      text = text || "."; // ref. https://github.com/imcvampire/vue-truncate-filter/issues/10 - fails on null
      text =  text.replace(/[.,/#!$%^&*;:{}=\-_`~()]/g," ");
      return text.substring(0, length) + suffix;
    },
    truncatepunc: function(text, length, suffix) {
      text = text || "."; // ref. https://github.com/imcvampire/vue-truncate-filter/issues/10 - fails on null
      text =  text.replace(/\s*([,.!?:;]+)(?!\s*$)\s*/g, '$1 ');
      return text.substring(0, length) + suffix;
    },
    // format date
    dateformat2: function(input) {
      if (input) {
        return dayjs(String(input)).format("ddd_MMM_DD HH:mm:ss");
      }
    }
  },

  methods: {
    deleteBookmk(id) {
      let uri = `http://localhost:4000/marks/delete/${id}`;
      this.axios.delete(uri).then((response) => {
        this.bookmks.splice(this.bookmks.indexOf(id), 1);
      });
    },
    
    rmpunctuation(ss) {
      this.nopunc =  ss.replace(/[.,/#!$%^&*;:{}=\-_`~()]/g," ");
      console.log(ss, this.nopunc);
      return this.nopunc;
    },
    

  },
};
</script>
