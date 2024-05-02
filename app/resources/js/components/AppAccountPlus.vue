<script></script>
<template>

<div class="box">
    <div class="vh-70 w-100 form-wrapper row d-flex flex-justify-center  align-end c-white">
        <div class="d-flex flex-justify-center  flex-align-center c-white h-20">
            <div class="col-6 wrapper-text d-flex flex-align-center h-60">
                <div>
                    <h1 class="pt-8 pl-32 pr-32 h-50">Non è mai stato cosi facile avere sconti,sorprese,regali e infiniti giochi....</h1>
                    <h2 class="pt-8 pl-32 pr-32 h-50">Del Viale,è molto altro che il classico bar...</h2>
                </div>
            </div>
            <div class="col-6 d-flex flex-justify-center flex-align-center mt-64">
                <div class="img-box border-radius d-flex flex-justify-center flex-align-center">
                    <img src="/public/img/storia.jpeg" alt="foto" class="w-80 h-70 img" >
                </div>     
            </div>
        </div>
    </div>





     <div class=" vh-100 w-100  row  c-black">
        <div class="col-6 d-flex flex-justify-center flex-align-center">
            <h1 class="w-90 p-16 descrption">Con l'account plus di Del viale, puoi avere una carta che raccoglie i punti in maniera intelligente.</h1>       
        </div>
        <div class="col-5  d-flex flex-justify-center flex-align-center">
            <div class="img-box  border-radius ">
                <img src="/public/img/carta-punti.png" alt="" class="w-100 h-100 img" >
            </div>     
        </div>
    </div>


    <div class="col-12 vh-80">
        <p class="pacifico-regular ">
            Ora anche virtuale!
        </p>
        <div class="d-flex flex-justify-center">
            <div class="  form-wrapper  ">
               <div class="col-4  h-100 ">
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="case w-70 h-70 "><p>Ottieni dei punti da spendere in premi</p></div>
                   </div>
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="case w-70 h-70 "><p> Ottieni punti ogni volta che accedi sul sito</p></div>
                   </div>
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="case w-70 h-70 "><p>Ogni click conta: guadagna punti con ogni accesso al nostro sito!</p></div>
                   </div>
               </div>
       
               <div class="col-4  h-100 ">
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="case w-70 h-70 "><p>Invita i tuoi amici e risparmia con punti extra o sconti esclusivi!"</p></div>
                   </div>
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="w-90 h-90 main-case">
                           <h4 class="w-50">Cosa ci faccio con i punti??</h4>
                       </div>
                   </div>
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="case w-70 h-70 "><p>Il compleanno è speciale, e così sono i nostri regali! Sconti imperdibili o punti bonus!</p></div>
                   </div>
       
               </div>
       
               <div class="col-4  h-100 ">
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="case w-70 h-70 "><p>L'ora d'oro per risparmiare! Sconti extra dalle ore x alle ore x.</p></div>
                   </div>
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="case w-70 h-70 "><p>Avrai ciò che vuoi in pochi minuti,direttamente a casa tua!</p></div>
                   </div>
                   <div class=" h-30 w-100 mini-box "> 
                       <div class="case w-70 h-70 "><p>Controllo totale in tempo reale: gestisci i pagamenti e monitora i tuoi punti live!</p></div>
                   </div>
               </div>
           </div>
        </div>
    </div>
 </div>


</template>
<style scoped>
    .box{
        padding-top: 13rem;
    }

    *{box-sizing: border-box;}

    .wrapper-text{
        background-color: rgba(90, 90, 90, 0.4);
        border-radius: 22px;
    }
    .case,.main-case{
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 0.7rem;
        font-weight: 800;
        padding: 0.4em;

    }
    .case{
        border: 2px solid black;
        margin: 1em;
    }
    p{
        text-align: center;
    }

    .mini-box{
        height: calc(100% / 3);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-wrapper{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 60%;
        margin-bottom:2em ;
    }

    img{
        border-radius: 25%;
    }
    .pacifico-regular {
        font-family: "Pacifico", cursive;
        font-weight: 400;
        font-style: normal;
        font-size: 4rem;
    }
    .descrption{
        font-family: sans-serif;
        font-weight: 800;
    }

    .box{
        font-weight: 500;
        font-size: 1.7rem;
    }
    li{
        margin: 0.5em 0.2rem;
    }
</style>