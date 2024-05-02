@extends('layouts.app')
@section('content')
    <head>
        <link rel="stylesheet" href="/footer.css">
        <link rel="stylesheet" href="/coffe.css">
        <link rel="stylesheet" href="/utilities.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        @vite(['resources/js/app.js','resources/sass/app.scss'])
        @vite(['resources/app.js','resources/scss/app.scss'])
        
    </head>
    
    <body>
        
        <div id="app" >
          
            <div class="row d-flex flex-justify-center wrapper ">
                <!-- gelati jambotron -->
                <div class="title"><h1 class="col-9 mb-32 mr-32">Non siamo un semplice bar o una tavola calda,da noi ti sentirai a casa!</h1></div>
               
                <div class="vh-50 vw-80 box-presentazione">

  
                    <!--Box Blocchi-->
                    <div class=" w-100 vh-50 d-flex flex-justify-center border-radius carosel-box">
                        <div class="w-70 h-100 d-flex ">
                            <img src="/public/img/teglia.jpeg" class="presentazione" alt="">
                        </div>
                    </div>

                    <!--Box Blocchi-->
                    <div class=" w-100 vh-50 d-flex flex-justify-center border-radius carosel-box">
                        <div class="w-70 h-100 d-flex ">
                            <img src="/public/img/cacao.jpeg" class="presentazione" alt="">
                        </div>
                    </div>

                    <!--Box Blocchi-->
                    <div class=" w-100 vh-50 d-flex flex-justify-center border-radius carosel-box">
                        <div class="w-70 h-100 d-flex ">
                            <img src="/public/img/pizza-0.jpeg" class="presentazione" alt="">
                        </div>
                    </div>

                    <!--Box Blocchi-->
                    <div class=" w-100 vh-50 d-flex flex-justify-center border-radius carosel-box">
                        <div class="w-70 h-100 d-flex ">
                            <img src="/public/img/pasta.jpeg" class="presentazione" alt="">
                        </div>
                    </div>
                </div>
                <!-- gelati jambotron -->
                <div class="col-8 ">

                    <div class="wrapper ">
                        <!-- prodotti linkati alle piattaforme -->
                        <div class="row partner container-fluid w-100 d-flex justify-content-center align-content-around">
                            <div class="box h-30 col-12  bg-white f-24 account-plus">
                            
                                <h2 class="c-black d-flex justify-content-center align-content-around m-32 c-white">
                                    <strong>
                                        DIVENTA PARTE DELLA NOSTRA FAMIGLIA
                                    </strong>
                                </h2>

                                <div class="col-12 d-flex justify-content-center align-content-around">
                                    <button type="button" class="btn">
                                        <a href="https://www.delviale.it/admin/client ">
                                            <strong class="d-flex justify-content-center align-content-around">
                                                <!-- link  ACCOUNT PLUS -->
                                                <div class=" bg-white account-button c-dodgerblue p-2em">
                                                    Account Plus
                                                </div>
                                                <!-- link  ACCOUNT PLUS -->
                                            </strong>
                                        </a>
                                    </button>
                                </div>
                        </div>
                        
                        <div class="box h-30 col-12  bg-white ">
                                <h2 class="c-black d-flex justify-content-center align-content-around  c-grey">
                                <strong>
                                    ORDINA DIRETTAMENTE A CASA TUA
                                </strong>
                                </h2>
                        
                            <div class=" food-platform">
                                <div class=" container-section">
                                    <button type="button" class="btn bg-white w-100">
                                        <strong>
                                            <a href="https://www.justeat.it/restaurants-la-gelateria-del-viale-fiano-romano/menu" class="d-flex justify-content-center align-content-around ">
                                            <div class="food-logo">
                                                <img src="/public/img/just-eat.png" alt="foto">
                                            </div>
                                            <div class="name">
                                                JUST-EAT
                                            </div>
                                            </a>
                                        </strong>
                                    </button>
                                </div>

                                <div class="container-section">
                                    <button type="button" class="btn bg-white w-100">
                                        <strong>
                                            <a href="https://deliveroo.it/it/menu/Capena/capena/la-gelateria-del-viale/?geohash=sr2zykq6nfcp" class="d-flex justify-content-center align-content-around ">
                                                <div class="food-logo">
                                                    <img src="/public/img/deliveroo.jpeg" alt="foto">
                                                </div>
                                                <div class="name">
                                                    DELIVEROO
                                                </div>
                                            </a>
                                        </strong>
                                    </button>
                                </div>

                                <div class=" container-section">
                                    <button type="button" class="btn bg-white w-100">
                                        <strong>
                                            <a href="https://glovoapp.com/it/it/fiano-romano/la-gelateria-del-viale-frc/" class="d-flex justify-content-center align-content-around">
                                            <div class="food-logo">
                                                <img src="/public/img/glovo.png" alt="foto">
                                            </div>
                                            <div class="name">
                                                GLOVO
                                            </div>
                                            </a>
                                        </strong>
                                    </button>
                                </div>
                            </div>
                            </div>
                            
                        <div class="box h-30 col-12   bg-white f-24">
                            <h2 class="c-black d-flex justify-content-center align-content-around m-32 ">
                                <strong class=" c-grey title-n">
                                    Numeri per ordini telefonici
                                </strong>
                            </h2>
                            <div class="col-12 d-flex justify-content-center align-content-center">
                                <div class="box btn w-100 d-flex justify-content-center numbers">
                                    <div class="d-flex justify-content-center align-content-around  w-70  p-8 m-8 number">
                                        <i class="fa-solid fa-phone telefoni"></i>
                                        <div class=" c-darkslategray">Telefono:</div>
                                        <div class="">0765689337</div>
                                    </div>
                                    <div class="d-flex justify-content-center align-content-around  w-70  p-8 m-8 number">
                                        <i class="fa-solid fa-mobile-screen telefoni"></i>
                                        <div class=" c-darkslategray ">Cellulare:</div>
                                        <div class="">3518085707</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- prodotti linkati alle piattaforme -->
                    </div>
                </div>
            </div>

            <footer>
        
                <!--RigaG-->
                <div id="containerG" class=" flex">
                    <div class="flex block-w" id="blockF">
                        <!--titolo e loghi-->
        
                        <!--titolo e loghi-->
                        
                        <!--tools-->
                        <div class="flex miniblockD">
                            <div class="miniblock">
                                <h3>Prodotti</h3>
                                <div>
                                    <a href="/gelati">Gelati</a>
                                </div>
                                <div><a href="/torte" class="c-white">Torte</a></div>
                                <div><a href="/coffe" class="c-white">Caffe</a></div>
                                <div><a href="/coffe" class="c-white">Tavola calda</a></div>
        
        
                            </div>
                            <div class="miniblock">
                                <h3>compagnia</h3>
                                <div><a href="https://www.delviale.it/admin/client">Chi siamo</a></div>
                                <div><a href="https://www.delviale.it/admin/sms/create">contattaci</a></div>
                                <div><a href="/">Il nostro sito</a></div>
        
                            </div>
                            <div class="miniblock posizione">
                                <h2>Dove siamo?</h2>
                                <div class="c-white w-80">
                                    <a href="https://www.google.com/maps/dir//Via+Pietro+Nenni,+2c,+00065+Fiano+Romano+RM/@42.1656867,12.5862969,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x132f6d324097aaab:0x6f54c8553473a67f!2m2!1d12.5888718!2d42.1656828!3e0?entry=ttu">
                                        Via Pietro Nenni, 2c, 00065 Fiano Romano RM
                                    </a>
                                </div>               
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d189265.66518977893!2d12.300268686718743!3d42.165777100000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6d323f878367%3A0x2f45f6bf2fb512a7!2sBar%20Gelateria%20del%20viale%20di%20Tarani%20Alessandro!5e0!3m2!1sit!2sit!4v1714469832232!5m2!1sit!2sit" class="mappa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>         
                            </div>
                        </div>
                        <!--tools-->
                    </div>
                </div>
                
        
                <!--RigaH-->
                <div id="containerH" >
                    <div class="d-flex block-w" id="blockG">
                        <!--logo-->
                        <div class="d-flex" id="logo"><img src="/public/img/logo.jpeg" alt="foto-logo"></div>
                        <!--logo-->
        
        
                        <div class="linkedin"><a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><p class="c-white">Powered By Kristian Filiposki</p> </a></div>
        
                        
                        <a href="https://www.delviale.it/register"><div class="bottone "><button><p class="c-white ">Registrati</p></button></div></a>
               
        
                    </div>
                </div>
                
            </footer>
        </div>

    
    </body>
    
@endsection
