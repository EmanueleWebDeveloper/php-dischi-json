const { createApp } = Vue
 
  createApp({
    data() {
      return {
        message: 'Hello Vue!',
        apiUrl: 'datas.php',
        listaDischi: []
      }
    },
    mounted() {
        this.readList
    },
    methods: {
      readList(){
        axios.get( this.apiUrl )
        .then( (response) => {
            this.listaDischi = response.data
        } )
      }
    }
  }).mount('#app')
