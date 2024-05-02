<script>

import { store } from '../store';
import AppCarosel from './AppCarosel.vue';
  export default {
    data() {
        return {
            store,
        };
    },
    methods: {},
    components: { AppCarosel }
}
</script>

<template>
    <div class="row partner container-fluid w-100 d-flex justify-content-center align-content-around">
        
        <div class="box h-30 col-7 bg-white f-24 account-plus">
            <h2 class="c-black d-flex justify-content-center align-content-around m-32 c-white">
                <strong>
                    DIVENTA PARTE DELLA NOSTRA FAMIGLIA
                </strong>
            </h2>
            <div class="col-12 ">
                <button type="button" class="btn  w-100">
                    <strong class="d-flex justify-content-center align-content-around">
                        <!-- link  ACCOUNT PLUS -->
                        <router-link to="/account-plus" class="nav-link bg-white account-button">
                                Account Plus
                        </router-link>
                        <!-- link  ACCOUNT PLUS -->
                    </strong>
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
            <h2 class="c-black d-flex justify-content-center align-content-around m-32 ">
                <strong class="f-32 c-grey">
                    Numeri per ordini telefonici
                </strong>
            </h2>
            <div class="col-12">
                <div class="box btn w-100 d-flex justify-content-center numbers">
                    <div class="d-flex justify-content-center align-content-around f-32 w-70 number p-8 m-8">0765689337</div>
                    <div class="d-flex justify-content-center align-content-around f-32 w-70 number p-8 m-8">3204684143</div>
                </div>
            </div>
        </div>

    </div>
    



</template>

<style scoped>

.account-plus{
    background-image: url('/public/img/account.png');
    background-position: center;
    background-size: cover;
}

.account-button{
    border-radius: 12px;
}
.number{
    border: 3px solid grey;
    font-weight: 100;
    color: grey;
}

a{
    flex-direction: column;
    align-items: center;}
.food-logo{
    margin-bottom: 10%;
    width: 70px;
    height: 70px;
    border: 2px solid grey;
    border-radius: 60%;
}
.food-logo img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-radius: 60%;

}

.partner{
    flex-wrap: nowrap;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.partner .box {
    margin: 5%;
    border: 1px solid rgba(90, 90, 90,0.6);
    border-radius: 5%;

    padding: 5%;
}
a{
    border: 1px solid rgba(90, 90, 90,0.6);
    padding: 5%;
    text-decoration: none;
    }

.food-platform{
    padding: 3%;
}
@media screen and (max-width: 900px) {
    .food-platform{
        flex-direction: column;
        align-items: center;
    }
    a{
    padding: 5%;
    border: 0;
    text-decoration: none;
    }
    .numbers{
        flex-direction: column;
        display: flex;
        align-items: center;
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
    .numbers{
        flex-direction: column;
        display: flex;
        align-items: center;
    }
    .number{
        font-size: 1.5em
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
    .numbers{
        flex-direction: column;
        display: flex;
        align-items: center;
    }
    .number{
        font-size: 1em
    }
}

</style>