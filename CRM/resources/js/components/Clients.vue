
<template>
  <v-card>
    <v-card-title>Lise des Clients</v-card-title>
    <formulaire v-bind:variableEnfant="variableParent" v-on:submitFormulaire="addClient($event)"></formulaire>
    <v-spacer></v-spacer>
    <v-data-table
      :headers="headers"
      :items="clients"
      :items-per-page="10"
      class="elevation-1"
      dark
    ></v-data-table>
  </v-card>
</template>

<script src="./clients.js">
</script>