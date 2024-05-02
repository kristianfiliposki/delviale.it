import {reactive} from 'vue'
export const store=reactive({
    isLoggedIn: false,
    data(){
        return{
            dati :[],
            images:[
                {

                },
            ],
            clientData:[]
        }
    },
})