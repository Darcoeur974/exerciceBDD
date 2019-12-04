import axios from 'axios';

export default {
    data() {
        return {
            nom: null,
            adresse: null,
            code_postal: null,
            ville: null,
            nomContact: null,
            prenomContact: null,
            telContact: null,
            emailContact: null,
            poste: null
        }
    },
    methods: {
        validationFormulaire() {
            axios.post('/api/clients/store', {
                nom: this.nom,
                adresse: this.adresse,
                code_postal: this.code_postal,
                ville: this.ville,
                nomContact: this.nunomContactll,
                prenomContact: this.prenomContact,
                telContact: this.nutelContactll,
                emailContact: this.emailContact,
                poste: this.poste

            })
                .then(({ data }) => {
                    console.log(data);
                    data.data.forEach(_data => {
                        this.clients.push(_data);
                    })
                })
        },
    }
};
