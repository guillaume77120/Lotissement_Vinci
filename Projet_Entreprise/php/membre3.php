<<<<<<< HEAD
<?php
    include "header.php"
?>

    <h1 style="text-align: right">2- Structure du fichier</h1>

    <p><strong>Fichier à traiter : </strong></p>



    <input type="file" id="fich" name="fich">Vous pouvez déposer un fichier ici 
    <?php
        $source1="fichier1.txt";
        $fichier1=fopen($source1,"r");
        fpassthru($fichier1); // Permet d'afficher le contenu du fichier dans un navigateur       
    ?>

    <form action="membre4.php">
        <button type="submit" class="oi oi-arrow-circle-right" style="float: right">Valider</button>
    </form>
        <form action="membre.php">
        <button type="submit" class="oi oi-circle-x" style="float: right">Annuler</button>
    </form>
    <form action="membre2.php">
        <button type="submit" class="oi oi-circle-left" style="float: left">Précédent</button>
    </form>


<?php
    include "footer.php"
=======
<?php
    include "header.php"
?>

    <h1 style="text-align: right">2- Structure du fichier</h1>

    <p><strong>Fichier à traiter : </strong></p>



    <input type="file" id="fich" name="fich">Vous pouvez déposer un fichier ici 


    <form action="membre4.php">
        <button type="submit" class="oi oi-arrow-circle-right" style="float: right">Valider</button>
    </form>
        <form action="membre.php">
        <button type="submit" class="oi oi-circle-x" style="float: right">Annuler</button>
    </form>
    <form action="membre2.php">
        <button type="submit" class="oi oi-circle-left" style="float: left">Précédent</button>
    </form>


<?php
    include "footer.php"
>>>>>>> 4a28eb6181ed92b2cf4e109fc37bafc2496a6552
?>