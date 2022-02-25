<?php
    include 'header.php';
?>

<h1 style="text-align: left">1 - Paramètres des plis</h1>
<hr>
<h2 style="text-align: center">Informations produits</h2>

    <p><strong>Factuation des plis :</strong></p>
        <select>
            <option>dzdzd</option>
            <option>dzfezd</option>
            <option>dzaszd</option>
        </select>
    <p><strong>Sous-compte de facturation :</strong></p>
        <select>
            <option>dzdzd</option>
            <option>dzfezd</option>
            <option>dzaszd</option>
        </select>
    <p><strong>Emetteur des plis :</strong></p>
        <select>
            <option>dzdzd</option>
            <option>dzfezd</option>
            <option>dzaszd</option>
        </select>
    <p><strong>Service aux plis :</strong></p>
        <select>
            <option>dzdzd</option>
            <option>dzfezd</option>
            <option>dzaszd</option>
        </select>
    
        <label for="options"><strong>Options fournis par le fichier :</strong></label><input type="checkbox" id="options"/>
    
    <p><strong>Combinaison d'options pour les plis de ce fichier</strong></p>
    <table>
        <tr>
            <td>1</td>
            <td>...</td>
        </tr>
        <tr>
            <td>2</td>
            <td>...</td>
        </tr>
        <tr>
            <td>3</td>
            <td>...</td>
        </tr>
        <tr>
            <td>4</td>
            <td>...</td>
        </tr>
        <tr>
            <td>5</td>
            <td>...</td>
        </tr>
        <tr>
            <td>5</td>
            <td>...</td>
        </tr>
        <tr>
            <td>6</td>
            <td>...</td>
        </tr>
        <tr>
            <td>7</td>
            <td>...</td>
        </tr>
    </table>








    <div style="text-align: center" class="mb-0 ">
        <p><strong>SmartData :</strong></p>
        <input type="checkbox" id="data1" name="data" value="data1" checked>
        <label for="data1">Générer la SmartData</label>
        <input type="checkbox" id="data2" name="data" value="data2" checked>
        <label for="data1">SmartData fournie par le fichier à trier</label>
    </div>
    

<div>
    <fieldset>
        <legend>
            <input type="select">
                <nom>destination</nom>
                <libellé>Filtrer les destinations :</libellé>
                <option valeur="tout">Traiter tout le fichier</option>
                <option vlauer="metropole">Ne traiter que les plis métropole</option>
                <option valeur="domtom">Ne traiter que les plis DOM-TOM</option>
            </input>
        </legend>
    </fieldset>
    <fieldset>
        <legend>
            <input type="checkbox" id="poids1" name="poids" value="poids1">
            <label for="poids1">Poids identique pour chaque pli :</label>
            <input type="text" name="poidspli"><p>(0-80g)</p>
            <input type="checkbox" id="poids2" name="poids" value="poids1">
            <label for="poids1">Fourni par le fichier à trier</label>
        </legend>
    </fieldset>
</div>  

<form action="membre3.php">
    <button type="submit" class="" style="float: left">Suivant</button>
</form>
<form action="membre.php">
    <button type="submit" class="" style="float: right">Annuler</button>
</form>

<?php
    include 'footer.php';
?>