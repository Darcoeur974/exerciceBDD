<template>
    <div>
        <h1>Ajouter un client</h1>
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
                        <td><input type="text" id="adresse" name="adresse"></td>
                        <td><input type="text" id="code_postal" name="code_postal"></td>
                        <td><input type="text" id="ville" name="ville"></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th><label for="nomContact">Nom du contact :</label></th>
                        <th><label for="prenomContact">Preom du contact :</label></th>
                        <th><label for="telContact">Numero de telephone :</label></th>
                        <th><label for="emailContact">E-mail :</label></th>
                        <th><label for="poste">Poste :</label></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="nomContact" name="nomContact"></td>
                        <td><input type="text" id="prenomContact" name="prenomContact"></td>
                        <td><input type="text" id="telContact" name="telContact"></td>
                        <td><input type="text" id="emailContact" name="emailContact"></td>
                        <td><input type="text" id="poste" name="poste"></td>
                    </tr>
                </tbody>
            </table>
            <input class="submit" type="submit" value="submit">
        </form>
    </div>
</template>