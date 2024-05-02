@extends('layouts.app')
@section('content')
    <head>
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="account-plus.css">
        <link rel="stylesheet" href="/utilities.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/js/app.js','resources/sass/app.scss'])
        @vite(['resources/app.js','resources/scss/app.scss'])
        
    </head>
    
    <body>
        
        <div id="app" >

                <div class="box">
                    <div class=" w-100 form-wrapper mt-64 row d-flex flex-justify-center  align-end c-white">
                        <div class="d-flex flex-justify-center  flex-align-center c-white h-20">
                            <div class=" wrapper-text d-flex flex-align-center h-60">
                                <div>
                                    <h1 class="pt-8 pl-32 pr-32 h-50">Non è mai stato cosi facile avere sconti,sorprese,regali e infiniti giochi....</h1>
                                    <h2 class="pt-8 pl-32 pr-32 h-50">Del Viale,è molto altro che il classico bar...</h2>
                                </div>
                            </div>
                            <div class=" d-flex flex-justify-center flex-align-center ">
                                <div class="img-box border-radius d-flex flex-justify-center flex-align-center">
                                    <img src="/public/img/storia.jpeg" alt="foto" class="w-60 h-90 img" >
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
                
                
                    <div class="col-10 vh-80">
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
                
                
      
        </div>

    </body>

    @endsection
