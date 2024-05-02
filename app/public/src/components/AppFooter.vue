<script>
import { store } from '../store';
import AppMap from './AppMap.vue';
export default{
    data(){
        return{
            store,
        }
    },
    components:{
        AppMap,
    }
}

</script>
<template>
    <footer>
        
        <!--RigaG-->
        <div id="containerG" class="container flex">
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
                        <div><a href="/account-plus">Chi siamo</a></div>
                        <div><a href="http://127.0.0.1:8000/admin/sms/create">contattaci</a></div>
                        <div><a href="/">Il nostro sito</a></div>

                    </div>
                    <div class="miniblock posizione">
                        <h2>Dove siamo?</h2>
                        <div class="c-white w-80">Via Pietro Nenni, 2c, 00065 Fiano Romano RM</div>
                        <div class="w-100 h-80 c-white">
                            <div class="w-110 h-100 mappa">     
                                <img src="/public/img/mappa.jpeg" alt="foto" class="foto-footer">                   
                            </div>
                        </div>
                    </div>
                </div>
                <!--tools-->
            </div>
        </div>
        

        <!--RigaH-->
        <div id="containerH" class="container">
            <div class="d-flex block-w" id="blockG">
                <!--logo-->
                <div class="d-flex" id="logo"><img src="/public/img/logo.jpeg" alt="foto-logo"></div>
                <!--logo-->


                <div class="linkedin"><a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><p class="c-white">Powered By Kristian Filiposki</p> </a></div>

                <a href="http://127.0.0.1:8000/register"><div class="bottone"><button><p class="c-white">Registrati</p></button></div></a>
       

            </div>
        </div>
        
    </footer>
     <!--link e assistenza-->

</template>
<style scoped>

.linkedin{

    padding: 1em;
    border-radius: 2%;
    font-size: 1.1em;
}

h3,h2{
    color: grey !important;
}
a{
    text-decoration: none;
    color: white;
}
.container{
    margin: 0 auto ;
    display: flex;
    max-width: 100%;
    align-items: center;
    justify-content: center;
}

.flex{
    display: flex;
}

#logoDisc{
    width: 100%;
}

#container-img-logo{
    width: 10%;
}

.link{
    margin: 8px;
    color: white;
}


.bottone{
    border-radius: 20px;
    min-width: 8em;
    height: 2.2em;
    display: inline-block;
    text-align: center;
    padding: 10px 32px;
}




.block-w{
    min-width: 90%;
    max-width: 70%;
    height: 100%;
    min-height: 60%;
    justify-content: center;
}

div>p{
margin-top: 0;
max-width: 18em;
}

div>h2{
margin-top: 20px; 
}

img{
    width: 500px;
    height: 500px;
}



.block-w img{
    max-width: 100%;
    max-height: 100%;
}



#containerG{
    background-color:rgb(60, 60, 60);
    height: 35em;
    padding:10% 0;
    width: 100%;
}


.miniblock{
    width: 60%;
    height: 100%;
    border-color: white;
}


#logo{
    border-radius: 22%;
    border: 3px solid white;
}
#logo img{
    border-radius: 25%;
}

#ita{
    height: 10px;
    width: 10px;
}

.logo-social{
    width: 15px;
    height: 15px;
    margin: 10px;
    background-color: white;
}

.miniblock>div,.miniblock>div{
    font-size: 1.1em;
    color: white;
    margin: 9px;
}

.miniblock>h3{
    color: #5865f2;
    margin: 9px;
}



#containerH{
    background-color:rgb(60, 60, 60);
    height: 10em;
    
}

#blockG{
    height:100%;
    justify-content: space-between;
    align-items: center;
    border-top: 5px solid white;

}

.bottone>button{
    background-color: #5865f2;
    border-radius: 10px;
    border: 0.1px solid #5865f2;
    height: 2.2em;
    width: 5em;
    padding:2px;
    color: white;
}

#blockG img{
    height: 90px;
    width: 90px;
}

.foto-footer{
    object-fit: cover;
    border: 1px solid white;
}
.mappa,.mappa img{
    border-radius: 2em;
}
@media screen and (max-width: 600px) {
.posizione{
    display: none;
}
}
</style>