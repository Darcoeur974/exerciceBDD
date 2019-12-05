import Vue from 'vue';
import axios from 'axios';
import Formulaire from './Formulaire.vue';

export default {
    components: { Formulaire },
    data() {
        return {
            clients: [],
            variableParent:'Toto est là!'
        }
    },
    methods: {
        getDatas() {
            this.clients = [];
            axios.get('/api/clients')
                .then(({ data }) => {
                    console.log("Data :" + data);
                    data.data.forEach(_data => {
                        this.clients.push(_data);
                    })
                })
        },
        addClient(client){
            console.log("Client :" + client);
            this.clients.push(client);
        }
    },
    created() {
        this.getDatas();
    }
};
