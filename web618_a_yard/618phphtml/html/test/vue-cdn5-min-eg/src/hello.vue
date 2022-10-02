<template id="hello">
  <div >
    <div>
      <hr/>
      This is hello.vue  component 
    </div>
  </div>
</template>

<script>
  export default {
    name: "hello",
    template: '#hello',
    data() {
      return {
        state01: ""
      };
    }
  };
</script>
