import Vue from 'vue';
import axios from 'axios';
import Formulaire from './Formulaire.vue';

export default {
    components: { Formulaire },
    data() {
        return {
            clients: []
        }
    },
    methods: {
        getDatas() {
            this.clients = [];
            axios.get('/api/clients')
                .then(({ data }) => {
                    console.log(data);
                    data.data.forEach(_data => {
                        this.clients.push(_data);
                    })
                })
        },
    },
    created() {
        this.getDatas();
    }
};
