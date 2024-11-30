
new window.Vue({
el: '#app',


  // baseURL: 'http://192.168.88.60:6035/',
  const client = axios.create({
    baseURL: `${process.env.VUE_APP_BACKEND_URL}/`,
    json: true
  });


export default {
  data () {
    return {
      loading: false,
      posts: [],
      model: {},
      show: false,
      access_token:"",
      t_errors:[],
      Post_form_is_hidden: true,
      polling: null
    }
  },
  async created () {
    console.log(`${process.env.VUE_APP_BACKEND_URL}/`);
    this.refreshPosts();
    this.pollData();
  },

  methods: {
    async refreshPosts () {
      this.loading = true // for original alert
      this.showoverlay = true // for overlay
      this.posts = await this.getPosts()
      this.loading = false
      this.showoverlay = false
    },

    //  poll the api every x seconds to get updated data..
    // https://renatello.com/vue-js-polling-using-setinterval/
    pollData () {
      this.polling = setInterval(() => {
        this.refreshPosts()
      }, 2000)
    }, 

    async populatePostToEdit (post) {
      this.Post_form_is_hidden = false
      this.model = Object.assign({}, post)
    },
    async savePost () {
      if (this.model.id) {
        await this.updatePost(this.model.id, this.model)
      } else {
        await this.apiCreatePost(this.model)
      }
      this.model = {} // reset form
      this.Post_form_is_hidden = true
      await this.refreshPosts()
    },
    async createPost () {
      this.model = {} // reset form
      this.Post_form_is_hidden = false
      // await this.refreshPosts()
    },
    async deletePost (id) {
      if (confirm('Are you sure you want to delete this?')) {
        // if we are editing a record we deleted, remove it from the form
        if (this.model.id === id) {
          this.model = {}
        }
        await this.dodeletePost(id)
        await this.refreshPosts()
      }
    },

    async execute (method, resource, data) {
      // inject the accessToken for each request
      // let accessToken = await Vue.prototype.$auth.getAccessToken()
      this.accessToken = localStorage.getItem("jwtToken");
      return client({
        method,
        url: resource,
        data,
        headers: {
          Authorization: `Bearer ${this.accessToken}`
        }
      })
      .then(req => {
        return req.data.results
      })
      .catch(e => {
        console.log("posts ~147");
        console.log(e);
        this.t_errors.push(e);
        this.$bvToast.toast(` ${e}`, {variant: 'danger', autoHideDelay: 15000 });
        if (e.response.status === 401) {
          router.push({
            name: "Login"
          });
        }
      });
    },

    // backend api urls..
    getPosts () {
      return this.execute('get', '/blogapp/api/v1/Post/')
    },
    getPost (id) {
      return this.execute('get', `/blogapp/api/v1/Post/${id}`)
    },
    apiCreatePost (data) {
      return this.execute('post', '/blogapp/api/v1/Post/', data)
    },
    updatePost (id, data) {
      return this.execute('put', `/blogapp/api/v1/Post/${id}/`, data)
    },
    dodeletePost (id) {
      return this.execute('delete', `/blogapp/api/v1/Post/${id}`)
    }
    // end backend api urls..

  },
  beforeDestroy () {
    clearInterval(this.polling)
  }
  
}



<script>
var api = axios.create({
  baseURL: 'api.php',
  withCredentials: true
});

api.interceptors.response.use(function (response) {
  if (response.headers['x-xsrf-token']) {
    document.cookie = 'XSRF-TOKEN=' + response.headers['x-xsrf-token'] + '; path=/';
  }
  return response;
});

var util = {
  methods: {
    resolve: function (path, obj) {
      return path.reduce(function(prev, curr) {
        return prev ? prev[curr] : undefined
      }, obj || this);
    },
    getDisplayColumn: function (columns) {
      var index = -1;
      var names = ['name', 'title', 'description', 'username'];
      for (var i in names) {
        index = columns.indexOf(names[i]);
        if (index >= 0) {
          return names[i];
        }
      }
      return columns[0];
    },
    getPrimaryKey: function (properties) {
      for (var key in properties) {
        if (properties[key]['x-primary-key']) {
          return key;
        }
      }
      return false;
    },
    getReferenced: function (properties) {
      var referenced = [];
      for (var key in properties) {
        if (properties[key]['x-referenced']) {
          for (var i = 0; i < properties[key]['x-referenced'].length; i++) {
            referenced.push(properties[key]['x-referenced'][i].split('.'));
          }
        }
      }
      return referenced;
    },
    getReferences: function (properties) {
      var references = {};
      for (var key in properties) {
        if (properties[key]['x-references']) {
          references[key] = properties[key]['x-references'];
        } else {
          references[key] = false; 
        }
      }
      return references;
    },
    getProperties: function (action, subject, definition) {
      if (action == 'list') {
        path = ['components', 'schemas', action + '-' + subject, 'properties', 'records', 'items', 'properties'];
      } else {
        path = ['components', 'schemas', action + '-' + subject, 'properties'];
      }
      return this.resolve(path, definition);
    }
  }
};

var orm = {
  methods: {
    readRecord: function () {
      this.id = this.$route.params.id;
      this.subject = this.$route.params.subject;
      this.record = null;
      var self = this;
      api.get('/records/' + this.subject + '/' + this.id).then(function (response) {
        self.record = response.data;
      }).catch(function (error) {
        console.log(error);
      });
    },
    readRecords: function () {
      this.subject = this.$route.params.subject;
      this.records = null;
      var url = '/records/' + this.subject;
      var params = [];
      for (var i=0;i<this.join.length;i++) {
        params.push('join='+this.join[i]);
      }        
      if (this.field) {
        params.push('filter='+this.field+',eq,'+this.id);
      }        
      if (params.length>0) {
        url += '?'+params.join('&');
      }
      var self = this;
      api.get(url).then(function (response) {
        self.records = response.data.records;
      }).catch(function (error) {
        console.log(error);
      });
    },
    readOptions: function() {
      this.options = {};
      var self = this;
      for (var key in this.references) {
        var subject = this.references[key];
        if (subject !== false) {
          var properties = this.getProperties('list', subject, this.definition);
          var displayColumn = this.getDisplayColumn(Object.keys(properties));
          var primaryKey = this.getPrimaryKey(properties);
          api.get('/records/' + subject + '?include=' + primaryKey + ',' + displayColumn).then(function (subject, primaryKey, displayColumn, response) {
            self.options[subject] = response.data.records.map(function (record) {
              return {key: record[primaryKey], value: record[displayColumn]};
            });
            self.$forceUpdate();
          }.bind(null, subject, primaryKey, displayColumn)).catch(function (error) {
            console.log(error);
          });
        }
      }
    },
    updateRecord: function () {
      api.put('/records/' + this.subject + '/' + this.id, this.record).then(function (response) {
        console.log(response.data);
      }).catch(function (error) {
        console.log(error);
      });
      router.push({name: 'List', params: {subject: this.subject}});
    },
    initRecord: function () {
      this.record = {};
      for (var key in this.properties) {
        if (!this.properties[key]['x-primary-key']) {
          if (this.properties[key].default) {
            this.record[key] = this.properties[key].default;
          } else {
            this.record[key] = '';
          }
        }
      }
    },
    createRecord: function() {
      var self = this;
      api.post('/records/' + this.subject, this.record).then(function (response) {
        self.record.id = response.data;
      }).catch(function (error) {
        console.log(error);
      });
      router.push({name: 'List', params: {subject: this.subject}});
    },
    deleteRecord: function () {
      api.delete('/records/' + this.subject + '/' + this.id).then(function (response) {
        console.log(response.data);
      }).catch(function (error) {
        console.log(error);
      });
      router.push({name: 'List', params: {subject: this.subject}});
    }
  }
};

Vue.component('menu-component', {
  mixins: [util, orm],
  template: '#menu',
  props: ['subjects']
})

var Home = Vue.extend({
  mixins: [util],
  template: '#home'
});

var List = Vue.extend({
  mixins: [util, orm],
  template: '#list',
  data: function () {
    return {
      records: null,
      subject: this.$route.params.subject,
      field: this.$route.params.field,
      id: this.$route.params.id      
    };
  },
  props: ['definition'],
  created: function () {
    this.readRecords();
  },
  computed: {
    related: function () {
      return (this.referenced.filter(function (value) { return value; }).length > 0);
    },
    join: function () {
      return Object.values(this.references).filter(function (value) { return value; });
    },
    properties: function () {
      return this.getProperties('list', this.subject, this.definition);
    },
    references: function () {
      return this.getReferences(this.properties);
    },
    referenced: function () {
      return this.getReferenced(this.properties);
    },
    primaryKey: function () {
      return this.getPrimaryKey(this.properties);
    }
  },
  methods: {
    referenceText(subject, record) {
      var properties = this.getProperties('read', subject, this.definition);
      var displayColumn = this.getDisplayColumn(Object.keys(properties));
      return record[displayColumn];
    },
    referenceId(subject, record) {
      var properties = this.getProperties('read', subject, this.definition);
      var primaryKey = this.getPrimaryKey(properties);
      return record[primaryKey];
    }
  }
});

var View = Vue.extend({
  mixins: [util, orm],
  template: '#view',
  props: ['definition'],
  data: function () {
    return {
      id: this.$route.params.id,
      subject: this.$route.params.subject,
      record: null
    };
  },
  created: function () {
    this.readRecord();
  },
  computed: {
    properties: function () {
      return this.getProperties('read', this.subject, this.definition);
    }
  },
  methods: {   
  }
});

var Edit = Vue.extend({
  mixins: [util, orm],
  template: '#update',
  props: ['definition'],
  data: function () {
    return {
      id: this.$route.params.id,
      subject: this.$route.params.subject,
      record: null,
      options: {}
    };
  },
  created: function () {
    this.readRecord();
    this.readOptions();
  },
  computed: {
    properties: function () {
      return this.getProperties('update', this.subject, this.definition);
    },
    primaryKey: function () {
      return this.getPrimaryKey(this.properties);
    },
    references: function () {
      return this.getReferences(this.properties);
    },
  },
  methods: {
  }
});

var Delete = Vue.extend({
  mixins: [util, orm],
  template: '#delete',
  data: function () {
    return {
      id: this.$route.params.id,
      subject: this.$route.params.subject
    };
  },
  methods: {
  }
});

var Add = Vue.extend({
  mixins: [util, orm],
  template: '#create',
  props: ['definition'],
  data: function () {
    return {
      id: this.$route.params.id,
      subject: this.$route.params.subject,
      record: null,
      options: {}
    };
  },
  created: function () {
    this.initRecord();
    this.readOptions();
  },
  computed: {
    properties: function () {
      return this.getProperties('create', this.subject, this.definition);
    },
    primaryKey: function () {
      return this.getPrimaryKey(this.properties);
    },
    references: function () {
      return this.getReferences(this.properties);
    }
  },
  methods: {
  }
});

var router = new VueRouter({
  linkActiveClass: 'active',
  routes:[
    { path: '/', component: Home},
    { path: '/:subject/create', component: Add, name: 'Add'},
    { path: '/:subject/read/:id', component: View, name: 'View'},
    { path: '/:subject/update/:id', component: Edit, name: 'Edit'},
    { path: '/:subject/delete/:id', component: Delete, name: 'Delete'},
    { path: '/:subject/list', component: List, name: 'List'},
    { path: '/:subject/list/:field/:id', component: List, name: 'Filter'}
  ]
});
app = new Vue({
  router: router,
  data: function () {
    return {definition: null};
  },
  created: function () {
    var self = this;
    api.get('/openapi').then(function (response) {
      self.definition = response.data;
    }).catch(function (error) {
      console.log(error);
    });
  }
}).$mount('#app');
</script>
