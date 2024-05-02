<script>
import AppMap from './AppMap.vue';
export default{
    data(){
        return{
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
        <div id="containerH" class="container">
            <div class="d-flex block-w" id="blockG">
                <!--logo-->
                <div class="d-flex" id="logo"><img src="/public/img/logo.jpeg" alt="foto-logo"></div>
                <!--logo-->


                <div class="linkedin"><a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><p class="c-white">Powered By Kristian Filiposki</p> </a></div>

                
                <a href="https://www.delviale.it/register"><div class="bottone "><button><p class="c-white p-2em">Registrati</p></button></div></a>
       

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

.miniblockD{width: 75%;}

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
.posizione{
    height: 100% !important;
}

@media screen and (max-width: 600px) {
.posizione{
    display: none;
}
}
</style>