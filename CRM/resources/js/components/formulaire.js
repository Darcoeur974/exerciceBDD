import axios from 'axios';

export default {
    props: ['variableEnfant'],
    data() {
        return {
            nom: null,
            adresse: null,
            code_postal: null,
            ville: null,
            nomContact: null,
            prenom: null,
            tel: null,
            email: null,
            poste: null,
            dialog: false,
        }
    },
    methods: {
        validationFormulaire(e) {
            e.preventDefault();
            axios.post('/api/clients/store', {
                nom: this.nom,
                adresse: this.adresse,
                code_postal: this.code_postal,
                ville: this.ville,
                nomEntreprise: this.nomContact,
                prenom: this.prenom,
                tel: this.tel,
                email: this.email,
                poste: this.poste

            })
                .then(({ data }) => {
                    this.$emit('submitFormulaire',data.data);
                })
        },
    }
};
