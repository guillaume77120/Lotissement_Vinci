<?php
    include "header.php"
?>
    <h1 style="test-align: center">Récapitulatif</h1>
    <div class="m5grid">
        <div class="m5col1">
            Libellé campagne : <input type="text" name="libelle" value="" readonly="readonly"><br>
            Date de dépôt : <input type="text" name="date" value="" readonly="readonly"><br>
            Produit : <input type="text" name="produit" value="" readonly="readonly"><br>
            Format des plis : <input type="text" name="format" value="" readonly="readonly"><br>
            Contenant : <input type="text" name="contenant" value="" readonly="readonly">

        </div>
        <div clas="m5col2">
            Limiter le poids des contenants : <input type="text" name="poids" value="" readonly="readonly"><br>
            Limiter le nombre de plis/contenants : <input type="text" name="limplis" value="" readonly="readonly"><br>
            Limiter avec épaisseur des pli : <input type="text" name="eplis" value="" readonly="readonly"><br>
            Accepter les CP erronés : <input type="text" name="cperroné" value="" readonly="readonly"><br>
            Accepter les CP de moins de 5 car. : <input type="text" name="contenant" value="" readonly="readonly">


        </div>
    </div>

    <p style="text-align: left">Fichier(s) à traiter :</p>
    <table>
        <thead>
            <tr>
                <th> </th>
                <th>Poids des plis</th>
                <th>Epaisseur des plis</th>
                <th>Type de fichier</th>
                <th>Options</th>
                <th>Fichier source</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Fichier n°1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <form action="membre.php">
        <button type="submit" class="" style="float: right">Annuler</button>
    </form>
    <button type="submit" class="" style="float: right">Lancer le tri</button>
    <button type="checkbox" class="" style="float: left">Sauvegarder ce profil de tri</button>

<?php
    include "footer.php"
?>
