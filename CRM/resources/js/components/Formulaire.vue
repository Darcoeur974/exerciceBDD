<template>
    <div>
        <h1>{{variableEnfant}}</h1>
        <form id="formulaire" @submit="validationFormulaire" action="" method="">
            <table>
                <thead>
                    <tr>
                        <th><label for="nom">Nom :</label></th>
                        <th><label for="adresse">Adresse :</label></th>
                        <th><label for="code_postal">Code postal :</label></th>
                        <th><label for="ville">Ville :</label></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="nom" name="nom" v-model="nom" minlength="4"></td>
                        <td><input type="text" id="adresse" name="adresse" v-model="adresse"></td>
                        <td><input type="text" id="code_postal" name="code_postal" v-model="code_postal"></td>
                        <td><input type="text" id="ville" name="ville" v-model="ville"></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th><label for="nomContact">Nom du contact :</label></th>
                        <th><label for="prenom">Prenom du contact :</label></th>
                        <th><label for="tel">Numero de telephone :</label></th>
                        <th><label for="email">E-mail :</label></th>
                        <th><label for="poste">Poste :</label></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="nomContact" name="nomContact" v-model="nomContact"></td>
                        <td><input type="text" id="prenom" name="prenom" v-model="prenom"></td>
                        <td><input type="text" id="tel" name="tel" v-model="tel"></td>
                        <td><input type="text" id="email" name="email" v-model="email"></td>
                        <td><input type="text" id="poste" name="poste" v-model="poste"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="submit">
        </form>
    </div>
</template>
<script src="./formulaire.js"></script>