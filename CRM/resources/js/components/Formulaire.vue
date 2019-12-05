<template>
  <v-dialog v-model="dialog" width="1200">
    <template v-slot:activator="{ on }">
      <v-btn v-on="on" color="blue lighten-2">Ajouter un client</v-btn>
      <v-spacer></v-spacer>
    </template>
    <!-- FORMULAIRE -->
    <v-card>
      <v-card-text>
        <v-container>
          <v-form id="formulaire" @submit="validationFormulaire" action method>
            <v-row>
              <v-col>
                <v-text-field
                  type="text"
                  id="nom"
                  name="nom"
                  v-model="nom"
                  minlength="4"
                  label="Nom"
                  required
                ></v-text-field>
              </v-col>
              <v-col>
                <v-text-field
                  type="text"
                  id="adresse"
                  name="adresse"
                  v-model="adresse"
                  label="Adresse"
                  required
                ></v-text-field>
              </v-col>
              <v-col>
                <v-text-field
                  type="text"
                  id="code_postal"
                  name="code_postal"
                  v-model="code_postal"
                  label="Code postal"
                  required
                ></v-text-field>
              </v-col>
              <v-col>
                <v-text-field
                  type="text"
                  id="ville"
                  name="ville"
                  v-model="ville"
                  label="First name"
                  required
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col>
                <v-text-field
                  type="text"
                  id="nomContact"
                  name="nomContact"
                  v-model="nomContact"
                  label="Nom du contact"
                  required
                ></v-text-field>
              </v-col>
              <v-col>
                <v-text-field
                  type="text"
                  id="prenom"
                  name="prenom"
                  v-model="prenom"
                  label="Prenom du contact"
                  required
                ></v-text-field>
              </v-col>
              <v-col>
                <v-text-field
                  type="text"
                  id="tel"
                  name="tel"
                  v-model="tel"
                  label="Numero de télèphone du contact"
                  required
                ></v-text-field>
              </v-col>
              <v-col>
                <v-text-field
                  type="text"
                  id="email"
                  name="email"
                  v-model="email"
                  label="E-mail du contact"
                  required
                ></v-text-field>
              </v-col>
              <v-col>
                <v-text-field
                  type="text"
                  id="poste"
                  name="poste"
                  v-model="poste"
                  label="Poste du contact"
                  required
                ></v-text-field>
              </v-col>
            </v-row>
          </v-form>
        </v-container>
      </v-card-text>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn type="submit" color="blue darken-1" text>Sauvegarder</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>
<script src="./formulaire.js"></script>