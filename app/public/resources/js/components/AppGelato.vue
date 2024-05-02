<script >
import AppCarosel from './AppCarosel.vue';
export default{
    data() {
        return {
        };
    },
    components: { AppCarosel }
}
</script>
<template>
    
    <div class="row d-flex flex-justify-center wrapper ">
        <div class="col-8 ">

            <div class="wrapper   ">
                <div class="row"><h1 class="col-12 mb-32 mr-32">Anni di studio per un buon gelato</h1></div>
                

                
                <!--Carosello-->
                <div class=" w-100 vh-50  mb-64">
                    <div class="w-100 h-100  ">
                        <AppCarosel 
                            imgA="/public/img/prep-1.jpeg" 
                            imgB="/public/img/prep-2.jpeg" 
                            imgC="/public/img/prep-3.jpeg" 
                            imgD="/public/img/prep-4.jpeg" 
                            imgE="/public/img/prep-5.jpeg" 
                            />
                    </div>
                </div>

                <!-- gelati jambotron -->
                <!-- gelati jambotron -->
                <div class="row"><h1 class="col-12 mb-32 mr-32">I nostri gelati,sono un nostro vanto!</h1></div>
                <!--Box Blocchi-->
                <div class=" w-100 vh-50 bg-red">
                    <div class="w-100 h-100 d-flex ">
        
                            <div class=" d-flex  h-100 box" >
                                <div class="w-50 h-50 bg-black mini-box"><img src="/public/img/Coppetta-fragola.jpeg" alt="foto" class="w-100 h-100 "></div>
                                <div class="w-50 h-50 bg-blue mini-box"><img src="/public/img/Coppetta-frutta.jpeg" alt="foto" class="w-100 h-100"></div>
                                <div class="w-50 h-50 bg-white mini-box"><img src="/public/img/Coppetta-limone.jpeg" alt="foto" class="w-100 h-100"></div>
                                <div class="w-50 h-50 bg- mini-box"><img src="/public/img/Coppetta-mandorla.jpeg" alt="foto" class="w-100 h-100"></div>
                            </div>
                            
                            <div class="box central">
                                <div class="bg-red h-100 first"></div>
                                <div class="bg-blue h-100 second"></div>
                            </div>
        
                            <div class=" d-flex  h-100 box" >
                                <div class="w-50 h-50 bg-black mini-box"><img src="/public/img/Coppetta-mango.jpeg" alt="" class="w-100 h-100"></div>
                                <div class="w-50 h-50 bg-blue mini-box"><img src="/public/img/Coppetta-panna.jpeg" alt="" class="w-100 h-100"></div>
                                <div class="w-50 h-50 bg-white mini-box"><img src="/public/img/Coppetta-pistacchio.jpeg" alt="" class="w-100 h-100"></div>
                                <div class="w-50 h-50  mini-box"><img src="/public/img/Coppetta-cioccolato.jpeg" alt="" class="w-100 h-100"></div>
                            </div>
        
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
    border: 0.4px solid black;
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
.food-logo img, .box img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.food-logo img{
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