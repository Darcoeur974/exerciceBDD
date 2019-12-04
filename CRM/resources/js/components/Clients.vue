
<template>
    <div>
        <h1>Client</h1>
        <formulaire></formulaire>
        <table>
            <br />
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(client,key) in clients" :key="key">
                    <td>{{client.nom}}</td>
                    <td>{{client.adresse.ville}}</td>
                    <td>{{client.contact[0].nom}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script src="./clients.js">

</script>

<style>
input {
    border: 1px black solid;
}

.submit {
    padding: 5px;
}
</style>