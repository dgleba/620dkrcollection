
status:


some works.

booklist has extra columns i don't see where they come from.  2021-01-02_Sat_10.41-AM


How made: copy components,main,app.vue from B465djamware-vueauth





Goal:

convert b465djam.. to newer seperate vue cli version.




_____________

detail:

vue create vue-eg552a

 1007  21-01-02 00:02:11 npm i --save vue-router
 1008  21-01-02 00:04:13 npm i --save bootstrap-vue
 1009  21-01-02 00:05:10 npm i --save axios

npm i --save vue-router
npm i --save bootstrap-vue
npm i --save axios

copy components,main,app.vue from B465djamware-vueauth


_____________

error.

You are using the runtime-only build of Vue where the template compiler is not available. Either pre-compile the templates into render functions, or use the compiler-included build.

fix.

vue.config.js is an optional config file that will be automatically loaded by @vue/cli-service if it's present in your project root (next to package.json). 

module.exports = {
runtimeCompiler: true
}

_____________

error.

/BookList.vue
  15:9  error  Elements in iteration expect to have 'v-bind:key' directives  vue/require-v-for-key

fix.

add v-bind:key="error"
        <li v-for="error of errors" v-bind:key="error">

_____________


