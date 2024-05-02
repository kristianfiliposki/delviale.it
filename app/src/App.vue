<script >
import AppHeader from './components/AppHeader.vue'
import AppMain from './components/AppMain.vue'
import AppFooter from './components/AppFooter.vue'
import AppSections from './components/AppSections.vue'
import { store } from './store.js'
import axios from 'axios';

export default{
  
  components:{
    AppHeader,
    AppMain,
    AppSections,
    AppFooter,

  },
  data(){
    return{
      store,
      clientData: null,
      errorMessage: null,

    }
  },
  methods: {
    async fetchClientData() {
      try {
        const response = await axios.get('/api/client-data');
        this.clientData = response.data;
        store.clientData = response.data; 
        console.log(
          store.clientData

        )
      } catch (error) {
        if (error.response && error.response.status === 401) {
          this.errorMessage = 'Non autorizzato';
        } else {
          this.errorMessage = 'Errore durante il recupero dei dati del cliente';
        }
      }
    },
  },
mounted() {
  // Chiama la funzione call se necessario
  // Potresti voler caricare i dati in base a condizioni specifiche
  this.fetchClientData();
}
}
</script>

<template>
  <body>
    <AppHeader/>
    <router-view></router-view>
    <AppFooter/>
  </body>

  
</template>

<style >
body{
background: rgb(178,254,222);
background: linear-gradient(58deg, rgba(178,254,222,1) 0%, rgba(220,234,255,0.9878545168067226) 38%, rgba(240,247,255,1) 53%, rgba(255,247,234,1) 67%, rgba(255,238,209,1) 78%);
}
*{
  font-family: sans-serif;
}



</style>
