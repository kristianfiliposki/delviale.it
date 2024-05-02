<script >
import { ref } from 'vue';
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
// import required modules
import { Autoplay, Pagination, Navigation } from 'swiper/modules';
export default {

components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const progressCircle = ref(null);
    const progressContent = ref(null);
    const onAutoplayTimeLeft = (s, time, progress) => {
      progressCircle.value.style.setProperty('--progress', 1 - progress);
    };
    return {
      onAutoplayTimeLeft,
      progressCircle,
      progressContent,
      modules: [Autoplay, Pagination, Navigation],
    };
  },
}




</script>
<template>
    <!-- main -->
    <div class="main">
        <div class=" vh-100 c-white ">
            <swiper
              :spaceBetween="30"
              :centeredSlides="true"
              :autoplay="{
                delay: 2500,
                disableOnInteraction: false,
              }"
              :pagination="{
                clickable: true,
              }"
              :navigation="true"
              :modules="modules"
              @autoplayTimeLeft="onAutoplayTimeLeft"
              class="mySwiper"
            >
                  <swiper-slide id="s1" class=" ">
                    <div class="box">
                      <h1 class=" pacifico-regular ">Del viale</h1>
                    </div>
                  </swiper-slide>
                  <swiper-slide id="s2">
                    <div class="box">
                      <h1 class=" pacifico-regular ">Del viale</h1>
                    </div>
                  </swiper-slide>
                  <swiper-slide id="s3">
                    <div class="box">
                      <h1 class=" pacifico-regular ">Del viale</h1>
                    </div>
                  </swiper-slide>
                  <swiper-slide id="s4">
                    <div class="box">
                      <h1 class=" pacifico-regular ">Del viale</h1>
                    </div>
                  </swiper-slide>
                  <swiper-slide id="s5">
                    <div class="box">
                      <h1 class=" pacifico-regular ">Del viale</h1>
                    </div>
                  </swiper-slide>
                  <template #container-end>
                    <div class="autoplay-progress">
                      <svg viewBox="0 0 48 48" ref="progressCircle">
                        <circle cx="24" cy="24" r="20"></circle>
                      </svg>
                      <span ref="progressContent"></span>
                    </div>
                  </template>
            </swiper>
        </div>
    </div>
    <!--fine main -->


</template>
<style scoped>
.box{
  position: relative;
  width: 36%;
}

h1{
  position: absolute;
  top: 20px;
  width: 100%;
  line-height: 1em;
}

#s1{
    background-image: url('/public/img/gelato-vetrina.png');
    background-size:cover ;
    background-position: center;
}

#s2{
    background-image: url('/public/img/prep-1.jpeg');
    background-size:cover ;
    background-position: center;
    
    
}

#s3{
    background-image: url('/public/img/entrata.jpeg');
    background-size:cover ;
    background-position: center;
    
    
}

#s4{
  background-image: url('/public/img/Coffe-machine.jpeg');
  background-size:cover ;
  background-position: center;


}

#s5{
  background-image: url('/public/img/entra.jpeg');
  background-size:contain ;
  background-position: center;


}

    .swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;

  /* Center slide text vertically */
  display: flex;
  justify-content: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit:contain ;
  position: center;
}

.autoplay-progress {
  position: absolute;
  right: 16px;
  bottom: 16px;
  z-index: 10;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  color: var(--swiper-theme-color);
}

.autoplay-progress svg {
  --progress: 0;
  position: absolute;
  left: 0;
  top: 0px;
  z-index: 10;
  width: 100%;
  height: 100%;
  stroke-width: 4px;
  stroke: var(--swiper-theme-color);
  fill: none;
  stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
  stroke-dasharray: 125.6;
  transform: rotate(-90deg);
}

.pacifico-regular {
  background-color: rgba(0,0,0, 0.4);
  border-radius: 10%;
  font-family: "Pacifico", cursive;
  font-weight: 400;
  font-style: normal;
  font-size: 7rem;
  color: white;
}

@media screen and (max-width: 800px) {
  .links-container{
    flex-wrap: wrap;
  }
   a{
    font-size: 0.5rem;
  }
}
@media screen and (max-width:650px) {
    .pacifico-regular {
    background-color: rgba(0,0,0, 0.4);
    border-radius: 10%;
    font-family: "Pacifico", cursive;
    font-weight: 400;
    font-style: normal;
    font-size:2.7em;
    color: white;
  }
  .links-container{
    flex-wrap: wrap;
  }
   a{
    font-size: 0.5rem;
  }
  .btn button{
  min-height:2em;
  padding: 0.2em;
}
}

</style>