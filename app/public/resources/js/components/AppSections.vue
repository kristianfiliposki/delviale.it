<script>

import AppCarosel from './AppCarosel.vue';
  export default {
    data() {
        return {
            
        };
    },
    methods: {},
    components: { AppCarosel }
}
</script>

<template>
        <!-- prodotti linkati alle piattaforme -->
        <div class="row partner container-fluid w-100 d-flex justify-content-center align-content-around">
            
            <div class="box h-30 col-7 bg-white f-24 account-plus">
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
    
            <div class="box h-30 col-7 bg-white ">
                <h2 class="c-black d-flex justify-content-center align-content-around m-32 c-grey">
                    <strong>
                        ORDINA DIRETTAMENTE A CASA TUA
                    </strong>
                </h2>
    
                <div class="row food-platform">
                    <div class="col-4 container-section">
                        <button type="button" class="btn bg-white w-100">
                            <strong>
                            <a href="https://www.justeat.it/restaurants-la-gelateria-del-viale-fiano-romano/menu" class="d-flex justify-content-center align-content-around ">
                                <div class="food-logo">
                                    <img src="/public/img/just-eat.png" alt="foto">
                                </div>
                                <div>
                                    JUST-EAT
                                </div>
                            </a>
                            </strong>
                        </button>
                    </div>
        
                    <div class="col-4 container-section">
                        <button type="button" class="btn bg-white w-100">
                            <strong>
                                <a href="https://deliveroo.it/it/menu/Capena/capena/la-gelateria-del-viale/?geohash=sr2zykq6nfcp" class="d-flex justify-content-center align-content-around ">
                                    <div class="food-logo">
                                        <img src="/public/img/deliveroo.jpeg" alt="foto">
                                    </div>
                                    <div>
                                        DELIVEROO
                                    </div>
                                </a>
                            </strong>
                        </button>
                    </div>
    
                    <div class="col-4 container-section">
                        <button type="button" class="btn bg-white w-100">
                            <strong>
                            <a href="https://glovoapp.com/it/it/fiano-romano/la-gelateria-del-viale-frc/" class="d-flex justify-content-center align-content-around">
                                <div class="food-logo">
                                    <img src="/public/img/glovo.png" alt="foto">
                                </div>
                                <div>
                                    GLOVO
                                </div>
                            </a>
                            </strong>
                        </button>
                    </div>
                    
                </div>
    
    
    
            </div>

            <div class="box h-30 col-7 bg-white f-24">
                <div class="col-12 ">
                    <h2 class="c-black d-flex justify-content-center align-content-around m-32 ">
                        <strong class=" c-grey title-n">
                            Scopri i nostri prodotti anche sui nostri social
                        </strong>
                    </h2>
                    <div class="box btn w-100 d-flex justify-content-center ">
                        
                        <div class="d-flex justify-content-center align-content-around ">
                            <div class="social">
                                <a href="https://www.facebook.com/lagelateriadelviale/photos_by">
                                    <span><i class="fa-brands fa-facebook"></i></span>
                                    <span><strong>facebook</strong></span>
                                    
                                </a>
                            </div>
                            <div class="social">
                                <a href="https://www.instagram.com/bar_gelateria_del_viale/">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                    <span><strong>instagram</strong></span>
                                </a>
                            </div>
    
                        </div>
                    </div>
                </div>
                <hr>

            </div>
    
            <div class="box h-30 col-7 bg-white f-24">
                <h2 class="c-black d-flex justify-content-center align-content-around m-32 ">
                    <strong class="f-32 c-grey title-n">
                        Numeri per ordini telefonici
                    </strong>
                </h2>
                <div class="col-12 ">
                    <div class="box btn w-100 d-flex justify-content-center numbers">
                        <div class="d-flex justify-content-center align-content-around  w-70  p-8 m-8 number">
                            <i class="fa-solid fa-phone telefoni"></i>
                            <div class=" c-darkslategray ">Telefono:</div>
                            <div class="">0765689337</div>
                        </div>
                        <div class="d-flex justify-content-center align-content-around  w-70  p-8 m-8 number">
                            <i class="fa-solid fa-mobile-screen telefoni"></i>
                            <div class=" c-darkslategray  ">Cellulare:</div>
                            <div class="">3518085707</div>
                        </div>
                    </div>
                </div>
        
                <hr>

            </div>

                    
        </div>
        <!-- prodotti linkati alle piattaforme -->
    



</template>

<style scoped>
.name{font-size: 60%;}
.telefoni{
    margin:0 0.5em;
    font-size: 1em;
}
.account-plus{
    background-image: url('/public/img/account.png');
    background-position: center;
    background-size: cover;
}

.account-button{
    border-radius: 12px;
    padding: 2em;
}
.number>*{
    font-size: 3em;
}

a{
    flex-direction: column;
    align-items: center;}
.food-logo{
    margin-bottom: 10%;
    min-width: 3.2em;
    min-height: 3.2em;
    border-radius: 60%;
}
.food-logo img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-radius: 60%;
    aspect-ratio: 1;

}

.title-n{
    font-weight: 700;
}

.partner{
    flex-wrap: nowrap;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.partner .box {
    margin: 5%;
    border-radius: 5%;
    padding: 5%;
}
a{
   
    padding: 5%;
    text-decoration: none;
    }

.food-platform{
    padding: 3%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.numbers{
        flex-direction: column;
        display: flex;
        align-items: center;
        border: 1px solid black;
        background: rgb(208,254,222);
        background-color: #929292;
        background: linear-gradient(58deg, rgba(220,234,255,0.9878545168067226) 38%, rgba(240,247,255,1) 53%, rgba(220,207,210,0.3) 67%, rgba(230,210,220,0.3) 78%);
        font-family: "Pacifico", cursive;
        font-weight: 200;
        font-style: normal;

    }
    .social{
    font-size: 1.7em;
    margin: 0 5%;

}

@media screen and (max-width: 1130px) {
        .number>*{
        color: grey;
        font-size: 2em;
    }
    a{
    padding: 5%;
    border: 0;
    text-decoration: none;
    }
    .numbers div{
    }
}
@media screen and (max-width: 650px) {
    .food-platform{
        flex-direction: column;
        align-items: center;
    }
    a{
    padding: 5%;
    border: 0;
    text-decoration: none;
    }
    .number{
        font-size: 0.7em;
    }

}
@media screen and (max-width: 480px) {
    .food-platform{
        flex-direction: column;
        align-items: center;
    }
    a{
    padding: 5%;
    border: 0;
    text-decoration: none;
    }
    .number{
        font-size: 0.5em;
    }

    @media screen and (max-width: 680px) {
    .social{
        font-size: 1.4em;
        
    }
    }
    @media screen and (max-width: 580px) {
        .social{
            font-size: 1.2em;

        }
    }
    @media screen and (max-width: 580px) {
        .social{
            font-size: 0.8em;

        }
    }
}

</style>