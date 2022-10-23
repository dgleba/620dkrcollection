<template id="IndexComponent">
  <div>
    <!-- <h1>List</h1> -->
    <div class="row">
      <router-link :to="{ name: 'edit' }" class="btn btn-primary">Create</router-link>
      <!-- Search bar -->
      &nbsp <input type="text" v-model="searchterm" v-on:keyup.enter="getrecords" placeholder="Search"><button
        v-on:click="clearsearch">x</button>
      <button @click="getrecords">Search</button>
      &nbsp Recrds: {{recordcnt}}
    </div>
    <!-- <br /> -->

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
        <tr v-for="dataRow in dataRows" :key="dataRow.id">
          <td>{{ dataRow.id }}</td>
          <td>{{ dataRow.title }}</td>
          <td>{{ dataRow.body }}</td>
          <td>
            <router-link :to="{name: 'edit', params: { id: dataRow.id }}" class="btn btn-primary">Edit</router-link>
          </td>
          <td><button class="btn btn-danger" @click.prevent="deletedataRow(dataRow.id)">Delete</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
/* eslint-disable */
import axios from "axios";

export default {
 
  data() {
    return {
      dataRows: [],
      recordcnt: 0,
      searchterm: ""
    }
  },
  created() {
    if ("localsearchterm" in localStorage) {
      this.searchterm = localStorage.getItem("localsearchterm");
    }
    this.getrecords();
  },
  methods: {
    clearsearch() {
      this.searchterm = "";
      this.getrecords();
    },
    getrecords() {
      localStorage.setItem("localsearchterm", this.searchterm);
      let uri = `http://10.4.71.231:6611/api/api.php/records/blogapp_post?search=${this.searchterm}&order=id,desc&page=1,5`;
      console.log(uri);
      axios.get(uri).then(response => {
        console.log(response);
        this.dataRows = response.data.records;
        this.recordcnt = response.data.results;
      }).catch(e => { this.$root.doError(e) });
    },
    deletedataRow(id) {
      let uri = `http://localhost:4000/posts/delete/${id}`;
      this.axios.delete(uri).then(response => {
        this.dataRows.splice(this.dataRows.indexOf(id), 1);
      });
    }
  }
}
</script>

