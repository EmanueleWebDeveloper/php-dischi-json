const { createApp } = Vue
 
  createApp({
    data() {
      return {
        message: 'Spotify!',
        apiUrl: 'datas.php',
        listaDischi: []
      }
    },
    mounted() {
        this.readList()
    },
    methods: {
      readList(){
        axios.get( this.apiUrl )
        .then( (response) => {
            this.listaDischi = response.data;
            // Controllo i dati ottenuti dall'API
            console.log(this.listaDischi); 
        } )
        
      }
    }
  }).mount('#app')
