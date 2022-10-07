
// =================================================
/*

This is a small vue app to edit a table in one component.
There is not auth/login on the table.

References:

started from https://github.com/nlware/vue-crud-ui 

https://github.com/dgleba/550dkrcolbrail/blob/main/vue-eg-552-yards/vue-eg-552-b-yard/vue-eg-552cdjango/src/components/PostsManager.vue

https://github.com/dgleba/MEVNCRUDExample

*/
// =================================================


// vue3-sfc-loader boilerplate..

const options = {
  moduleCache: { vue: Vue },

  async getFile(url) {
    const res = await fetch(url);
    if ( !res.ok ) {
      throw Object.assign(new Error(res.statusText + ' ' + url), { res });
    }
    return {
      getContentData: (asBinary) => asBinary ? res.arrayBuffer() : res.text(),
    }
  },
  addStyle: () => {},
}


// =================================================

// home component

var Home = Vue.extend({
  // mixins: [util],
  template: '#home'
});

// =================================================

// component loader helper..

function load(path) {
  return window['vue2-sfc-loader'].loadModule(path, options);
}

Vue.use(VueRouter);

// const router = new VueRouter({
//   //mode: 'history',
//   mode: 'hash',
//   routes: [
//     { path: '/pm', component: () => load('/postsManager.vue') },
//     { path: '/', component: Home},
//   ]
// })


// =================================================

// main starting point..

load('./src/app.vue')
.then(app => {
  const router = new VueRouter({
    //mode: 'history',
    mode: 'hash',
    routes: [
      { path: '/h', component: () => load('./src/hello.vue') },
      { path: '/pm', component: () => load('./src/postsManager.vue') },
      { path: '/', component: Home},
    ]
  })
  new Vue({ ...app, router }).$mount('#app')
});
