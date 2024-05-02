<script >
import { store  } from '../store';
import AppCarosel from './AppCarosel.vue';
export default{
    data() {
        return {
            store,
        };
    },
    components: { AppCarosel }
}
</script>
<template>
    
    <div class="row d-flex flex-justify-center wrapper ">
        <div class="col-8 ">

            <div class="wrapper  ">
                <!-- gelati jambotron -->
                <div class="row">
                    <h1 class="col-12 mb-32 mr-32">Il dottore delle Torte!</h1>
                </div>
                <!--Box Blocchi-->
                <div class=" w-100 vh-50 ">
                    <div class="w-100 h-100 d-flex ">
                        <AppCarosel 
                            imgA="/public/img/torta-4.png" 
                            imgB="/public/img/torta-2.jpg" 
                            imgC="/public/img/torta-3.png" 
                            imgD="/public/img/torta-5.png" 
                            imgE="/public/img/torta.png" 
                            />
                    </div>
                </div>
                <!-- gelati jambotron -->
                
                <!-- gelati img carosello -->
                <div  class=" row w-100 ">
                    <div class="col-12">
                        <div class="bg-white h-50 scrollport ">
                            <img src="" alt="foto" v-for="img in store.images">
                        </div>
                    </div>
                </div>
                <!-- gelati img carosello -->
                
                <!-- prodotti linkati alle piattaforme -->
                <div class=" mt-64 wrapper register mb-64">
                    <div class="platform h-30 bg-white ">
                        <h2 class="c-black d-flex justify-content-center align-content-around m-32">
                            <strong>
                                ORDINA DIRETTAMENTE A CASA TUA
                            </strong>
                        </h2>
            
                        <div class="row food-platform">
                            <div class="col-4">
                                <button type="button" class="btn bg-white w-100">
                                    <strong>
                                      <a href="https://www.justeat.it/restaurants-la-gelateria-del-viale-fiano-romano/menu" class="d-flex justify-content-center align-content-around f-24">
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
                
                            <div class="col-4">
                                <button type="button" class="btn bg-white w-100">
                                    <strong>
                                        <a href="https://deliveroo.it/it/menu/Capena/capena/la-gelateria-del-viale/?geohash=sr2zykq6nfcp" class="d-flex justify-content-center align-content-around f-24">
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
            
                            <div class="col-4">
                                <button type="button" class="btn bg-white w-100">
                                    <strong>
                                     <a href="https://glovoapp.com/it/it/fiano-romano/la-gelateria-del-viale-frc/" class="d-flex justify-content-center align-content-around f-24">
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
                </div>
                <!-- prodotti linkati alle piattaforme -->
            </div>
        </div>
    </div>

</template>
<style scoped>

h1{
    font-size: 2em;
    font-family: sans-serif;
    font-weight: 800;
}

.wrapper{
    padding-top: 10%;
}


.box{
    width: calc(100% / 3);
    height: 100%;
    border: 1px solid black;
    flex-wrap: wrap;
}

.central{overflow: auto;}

.first{
    background-image: url('/public/img/Gelato-limone.jpeg');
    background-size: cover;
    background-position: center;

}
.second{
    background-image: url('/public/img/gelato-stracciatella.jpeg');
    background-size: cover;
    background-position: center;


}
.third
{
    background-image: url('/public/img/Coppetta-mango.jpeg');
    background-size: cover;
    background-position: center;
}

.mini-box{
    border: 4px solid black;
    object-fit: cover;
    object-position: center;
}


.register{
    border: 3px solid black;
    background-color: white;
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

@media screen and (max-width: 800px) {
    .food-platform{
        flex-direction: column;
        align-items: center;
    }
    a{
    padding: 5%;
    border: 0;
    text-decoration: none;
    }
    .wrapper{    padding-top: 20%;}


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

}


</style>