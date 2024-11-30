
    /* <!-- */
    const config = {
      files: {
        '/app.vue': `
          <template>
            <div>
              <div><router-link to="/foo">go to /foo</router-link></div>
              <div><router-link to="/bar">go to /bar</router-link></div>
              <router-view/>
            </div>
          </template>
       `,
       '/foo.vue': `
        <template>
          <div>
            foo route
            <div>got to <router-link to="/">root</router-link></div>
          </div>
        </template>
       `,
       '/bar.vue': `
        <template>
          <div>
            bar route
            <div>got to <router-link to="/">root</router-link></div>
          </div>
        </template>
       `,
      }
    };
    /* --> */
    
    const options = {
      moduleCache: { vue: Vue },
      getFile: url => config.files[url],
      addStyle: () => {},
    }
    
    function load(path) {
      
      return window['vue2-sfc-loader'].loadModule(path, options);
    }

    Vue.use(VueRouter);

    load('/app.vue')
    .then(app => {

      const router = new VueRouter({
        //mode: 'history',
        mode: 'hash',
        routes: [
          { path: '/foo', component: () => load('/foo.vue') },
          { path: '/bar', component: () => load('/bar.vue') },
        ]
      })
  
      new Vue({ ...app, router }).$mount('#app')
    });
    
