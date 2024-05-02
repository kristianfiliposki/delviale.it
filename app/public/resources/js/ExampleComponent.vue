<script >
import AppMain from './components/AppMain.vue'
import AppFooter from './components/AppFooter.vue'
import AppSections from './components/AppSections.vue'
import AppJambotron from './components/AppJambotron.vue';
import AppCardMove from './components/AppCardMove.vue';

export default{
  
  components:{
    AppCardMove,
    AppJambotron,
    AppMain,
    AppSections,
    AppFooter,

  },
  data(){
    return{
      clientData: null,
      errorMessage: null,

    }
  },
  methods: {

  },
mounted() {
  // Chiama la funzione call se necessario
  // Potresti voler caricare i dati in base a condizioni specifiche
}
}
</script>

<template>
  <body>
    <AppJambotron/>
    <AppSections/>
    <AppCardMove/>
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
