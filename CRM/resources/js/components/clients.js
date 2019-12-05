import Vue from 'vue';
import axios from 'axios';
import Formulaire from './Formulaire.vue';

export default {
    components: { Formulaire },
    data() {
        return {
            variableParent: 'Ajout de Client',
            headers: [
                { text: 'Nom', value: 'nom' },
                { text: 'Adresse', value: 'adresse' },
                { text: 'Code postal', value: 'code_postal' },
                { text: 'Ville', value: 'ville' },
                { text: 'Nom du contact', value: 'nomContact' },
                { text: 'Prenom du contact', value: 'prenom' },
                { text: 'Numero du contact', value: 'numero' },
                { text: 'E-mail du contact', value: 'email' },
                { text: 'poste du contact', value: 'poste' },
            ],
            clients: [],
        }
    },
    methods: {
        getDatas() {
            this.clients = [];
            axios.get('/api/clients')
                .then(({ data }) => {
                    data.data.forEach(_data => {
                        this.clients.push(this.formatData(_data));
                    })
                })
        },
        addClient(client) {
            this.clients.push(this.formatData(client));
        }
        ,
        formatData(data) {
            console.log(data);
            return {
                nom: data.nom,
                adresse: data.adresse.adresse,
                code_postal: data.adresse.code_postal,
                ville: data.adresse.ville,
                nomContact: data.contacts[0].nom,
                prenom: data.contacts[0].prenom,
                numero: data.contacts[0].tel,
                email: data.contacts[0].email,
                poste: data.contacts[0].poste,
            }
        }
    },
    created() {
        this.getDatas();
    }
};
