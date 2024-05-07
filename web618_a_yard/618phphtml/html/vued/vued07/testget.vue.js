export default {

template:`
  <div>
   {{ info }}
  </div>
`,

  data() {
    return {
      dataRows: [],
      info: null,
      recordcnt: 0,
      searchterm: "",
      accessToken: "",
    }
  },
  mounted() {
    axios.get('http://10.4.71.231:37461/menuapp/api/v1/Menu0')
    .then(response => (this.info = response))
    console.log(this.info)
  }  
}
