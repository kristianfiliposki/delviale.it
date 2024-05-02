
import {createRouter,createWebHistory} from "vue-router";

/* importa un elemento */
import AppMain from './components/AppMain.vue';
import AppAccountPlus from './components/AppAccountPlus.vue';
import AppContact from './components/AppContact.vue';
import AppGelato from './components/AppGelato.vue';
import AppCoffe from './components/AppCoffe.vue';
import AppTorta from './components/AppTorta.vue';



const router=createRouter({
    history:createWebHistory(),
    routes:[
        {
            path:"/",
            name:"Main",
            component: AppMain,
        },
        {
            path:"/account-plus",
            name:"AppAccountPlus",
            component: AppAccountPlus,
        },        
        {
            path:"/contact",
            name:"Conctac-US",
            component: AppContact,
        },        
        {
            path:"/torte",
            name:"Torta",
            component: AppTorta,
        },        
        {
            path:"/coffe",
            name:"Coffehouse",
            component: AppCoffe,
        },        
        {
            path:"/gelati",
            name:"Gelati",
            component: AppGelato,
        },        

    ],
})
export {router};
