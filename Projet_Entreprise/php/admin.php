<<<<<<< HEAD


<?php
    session_start();

    include 'config.php';

    if($_SESSION['open'] == 1){
        if($_SESSION['login'] == ("admin") ){
?>

     <?php
        include 'header.php';
        
        ?>

        <!-- MAIN CONTENT -->
        <div class="container">
            <h1 class="title">Administration</h1>
            <br>
            <div class=admin>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Authentification</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Clients</td>
                        <td></td>
                        <td><a href="client.php?action=add">Ajouter <i class="fa fa-plus"></i></a></td>
                        <td><a href="client.php?action=update&show">Modifier <i class="fa fa-pencil"></i></a></td>
                      </tr>
                    </tbody>
                </table>
            </div>

            
        </div>

        <?php include 'footer.php'; ?>

<?php
        } else{
            echo "Vous n'êtes pas administrateur !\n Vous souhaitez vous connecter en tant qu'administrateur ? Reconnectez-vous en tant qu'administrateur\n\n<a href='connexion.php'>Me connecter</a>";
          }
    }else{
          echo "Vous n'êtes pas administrateur !\n Vous souhaitez vous connecter en tant qu'administrateur ? Reconnectez-vous en tant qu'administrateur\n\n<a href='connexion.php'>Me connecter</a>";
        }
?>

<!-- <?php /* 
    require "php/header.php"; 
    $file ="EZ.txt";
    $champsvide = "Un ou plusieurs champs sont vides";
?>

<div class="grilContact">
    <div class='infos'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js">
        </script>
        <?php
            $Date= date('Y-m-d H:i:s');
            if (isset($_SESSION['login'])) {
                if($_SESSION['login'] == "admin") {
        ?>
        <h1 class="sous_titre">Gestion de Compte :</h1>
        <h3>Changer un mot de passe</h3>
        <form name="form" action="" method="post">
            <p>
                <input type="text" name="set1" placeholder="Ancien mot de passe ">
                <input type="text" name="set2" placeholder="Nouveau mot de passe">
                <input type="submit" name="go1" value="GO">
            </p>
        </form>
        <?php
            if (isset($_POST['go1']) && $_POST['go1'] == 'GO') {
                if ( (isset($_POST['set2']) && !empty($_POST['set2'])) && (isset($_POST['set1']) && !empty($_POST['set2']))) {
                    $set1=md5($_POST['set1']);
                    $set2=md5($_POST['set2']);
                    $sql = "UPDATE membre SET mdp ='$set2' WHERE mdp='$set1';";
                    $sql2 = "SELECT idmembre FROM membre WHERE mdp='$set2'";
                    echo "Le mot de passe a &eacutet&eacute chang&eacute<br>;";
                    if (isset($sql) && !empty($sql2)) {
                        $link = mysqli_connect($HOST , $login, $pass, $database);
                        $req = mysqli_query($link,$sql2) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysqli_error($link));
                        while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
                            $ID=$data['idmembre'];
                            mysqli_close ($link);
                        }
                        # Ouverture en mode écriture
                        $fileopen=(fopen("$file",'a'));
                        # Ecriture de "Début du fichier" dans le fichier texte
                        echo $data['idmembre'];
                        fwrite($fileopen,$Date. "update mdp ".$ID."\r");
                        # On ferme le fichier proprement
                        fclose($fileopen);
                    }
                }else{
                    echo $champsvide;
                }
            }
        ?>
        <h3>Changer le login</h3>
        <form name="form" action="" method="post">
            <p><input type="text" name="set1" placeholder="Ancien login">
                <input type="text" name="set2" placeholder="Nouveau login">
                <input type="submit" name="go2" value="GO">
            </p>
        </form>
        <?php
            if (isset($_POST['go2']) && $_POST['go2'] == 'GO') {
                if ( (isset($_POST['set1']) && !empty($_POST['set1']))  && (isset($_POST['set2']) && !empty($_POST['set2'])) ) {
                    $set1=$_POST['set1'];
                    $set2=$_POST['set2'];
                    $sql="UPDATE membre SET  login='$set2' WHERE login='$set1';";
                    $sql2 = "SELECT idmembre FROM membre WHERE login='$set1'";
                    echo " le mot de passe  a &eacute;t&eacute; chang&eacute<br>;";
                    if (isset($sql) && !empty($sql2)) {
                            $link = mysqli_connect($HOST , $login, $pass, $database);
                            $req = mysqli_query($link,$sql2) or die('Erreur SQL !<br />'.$sql2.'<br />'.mysqli_error($link));
                            while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)) {
                                $ID=$data['idmembre'];
                                mysqli_close ($link);
                            }
                        $fileopen=(fopen("$file",'a'));
                        echo $data['idmembre'];
                        fwrite($fileopen,$eeee. "update Login ".$ID."\r");
                        fclose($fileopen);
                    }
                echo "Le login a bien &eacutet&eacute chang&eacute;<br>";
                }else{echo $champsvide;
                }
            }
        ?>
        <h3>Supprimer un compte</h3>
        <form name="form" action="" method="post">
            <p>
                <input type="text" name="set1" placeholder="Entrez un login">
                <input type="submit" name="go3" value="GO">
            </p>
        </form>
        <?php
            if (isset($_POST['go3']) && $_POST['go3'] == 'go') {
                if (isset($_POST['set1']) && !empty($_POST['set1'])) {
                    $set1 = $_POST['set1'];
                    $sql = "DELETE FROM membre WHERE login='$set1';";
                    $sql2 = "SELECT idmembre FROM membre WHERE login='$set1'";
                    echo "Le compte a bien été supprimé<br />;";
                    if (isset($sql) && !empty($sql2)) {
                        $link = mysqli_connect($HOST , $login, $pass, $database);
                        $req = mysqli_query($link,$sql2);
                        while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
                            $ID=$data['idmembre'];
                            mysqli_close ($link);
                        }
                        $fileopen=(fopen("$file",'a'));
                        echo $data['idmembre'];
                        fwrite($fileopen,$eeee. "SUPP Compte ".$ID."\r");
                        fclose($fileopen);
                    }
                }else{
                    echo $champsvide;
                }
            }
        ?>
    </div>
    <br>
    <header>
        <h1 class="sous_titre">Gestion de Client :</h1>
    </header>
    <div class='infos'>
        <h3>Ajouter un client</h3>
        <form name="test" action="" method="post">

            <p>Société possédant un CI Premium</p>
            <div class="squaredTwo">
                <input type="checkbox" value="None" id="squaredTwo" name="check" />
                <label for="squaredTwo"></label>
            </div>

            <input type="text" name="set1" placeholder="Entrez un nom" required>
            <input type="text" name="set2" placeholder="Entrez une adresse">
            <input type="number_format" min="0" minlength="5" maxlength="5" name="set3" placeholder="Entrez un code postal" required autofocus />
            <input type="text" name="set4" placeholder="Entrez une commune" required>
            <input id="d1" type="text" min="0" minlength="14" maxlength="14" name="set5" placeholder="Entrez un SIRET (14 chiffres)">
            <input type="text" name="set6" placeholder="Entrez une ann&eacute;e">
            <input type="text" name="set12" placeholder="Entrez un r&eacute;sum&eacute;">
            <input type="submit" value="GO" name="go4">
        </form>
        <h3>Tableau des clients</h3>
        <?php
                $link = mysqli_connect($HOST , $login, $pass, $database);
                if(!mysqli_set_charset($link,"utf8mb4")){//encodage  en utf8mb4
	                printf(mysqli_error($link));
	                exit();
                }
                echo "<div class='gril'>";
                $req = mysqli_query($link,$sql);
                //  if ($req) {
	            while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
		            echo "<th>";
		            echo "<div class='ca'>";
		 	        echo "<a href='detail.php?isbn=" . $data['Login'] . "'><img src='../img/Livres/" . $data["Isbn"] . ".jpg' class='img' alt=''></a><div align='center'>";
		 	        echo "<p class='pc'>Titre : " . $data["Titre"] . "</p>";
			        echo "</div>";
		            echo "</ul>";
                    echo "</div>";
	            }                    
            ?>
    </div>
</div>
<?php
        }
    }
    else{echo "Vous n'avez pas les droits pour accéder a cette page.";}
?>

<?php 
    require "footer.php";
?>

</body>

=======


<?php
    session_start();

    include 'config.php';

    if($_SESSION['open'] == 1){
        if($_SESSION['login'] == ("admin") ){
?>

     <?php
        include 'header.php';
        
        ?>

        <!-- MAIN CONTENT -->
        <div class="container">
            <h1 class="title">Administration</h1>
            <br>
            <div class=admin>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Authentification</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Clients</td>
                        <td></td>
                        <td><a href="client.php?action=add">Ajouter <i class="fa fa-plus"></i></a></td>
                        <td><a href="client.php?action=update&show">Modifier <i class="fa fa-pencil"></i></a></td>
                      </tr>
                    </tbody>
                </table>
            </div>

            
        </div>

        <?php include 'footer.php'; ?>

<?php
        } else{
            echo "Vous n'êtes pas administrateur !\n Vous souhaitez vous connecter en tant qu'administrateur ? Reconnectez-vous en tant qu'administrateur\n\n<a href='connexion.php'>Me connecter</a>";
          }
    }else{
          echo "Vous n'êtes pas administrateur !\n Vous souhaitez vous connecter en tant qu'administrateur ? Reconnectez-vous en tant qu'administrateur\n\n<a href='connexion.php'>Me connecter</a>";
        }
?>

<!-- <?php /* 
    require "php/header.php"; 
    $file ="EZ.txt";
    $champsvide = "Un ou plusieurs champs sont vides";
?>

<div class="grilContact">
    <div class='infos'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js">
        </script>
        <?php
            $Date= date('Y-m-d H:i:s');
            if (isset($_SESSION['login'])) {
                if($_SESSION['login'] == "admin") {
        ?>
        <h1 class="sous_titre">Gestion de Compte :</h1>
        <h3>Changer un mot de passe</h3>
        <form name="form" action="" method="post">
            <p>
                <input type="text" name="set1" placeholder="Ancien mot de passe ">
                <input type="text" name="set2" placeholder="Nouveau mot de passe">
                <input type="submit" name="go1" value="GO">
            </p>
        </form>
        <?php
            if (isset($_POST['go1']) && $_POST['go1'] == 'GO') {
                if ( (isset($_POST['set2']) && !empty($_POST['set2'])) && (isset($_POST['set1']) && !empty($_POST['set2']))) {
                    $set1=md5($_POST['set1']);
                    $set2=md5($_POST['set2']);
                    $sql = "UPDATE membre SET mdp ='$set2' WHERE mdp='$set1';";
                    $sql2 = "SELECT idmembre FROM membre WHERE mdp='$set2'";
                    echo "Le mot de passe a &eacutet&eacute chang&eacute<br>;";
                    if (isset($sql) && !empty($sql2)) {
                        $link = mysqli_connect($HOST , $login, $pass, $database);
                        $req = mysqli_query($link,$sql2) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysqli_error($link));
                        while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
                            $ID=$data['idmembre'];
                            mysqli_close ($link);
                        }
                        # Ouverture en mode écriture
                        $fileopen=(fopen("$file",'a'));
                        # Ecriture de "Début du fichier" dans le fichier texte
                        echo $data['idmembre'];
                        fwrite($fileopen,$Date. "update mdp ".$ID."\r");
                        # On ferme le fichier proprement
                        fclose($fileopen);
                    }
                }else{
                    echo $champsvide;
                }
            }
        ?>
        <h3>Changer le login</h3>
        <form name="form" action="" method="post">
            <p><input type="text" name="set1" placeholder="Ancien login">
                <input type="text" name="set2" placeholder="Nouveau login">
                <input type="submit" name="go2" value="GO">
            </p>
        </form>
        <?php
            if (isset($_POST['go2']) && $_POST['go2'] == 'GO') {
                if ( (isset($_POST['set1']) && !empty($_POST['set1']))  && (isset($_POST['set2']) && !empty($_POST['set2'])) ) {
                    $set1=$_POST['set1'];
                    $set2=$_POST['set2'];
                    $sql="UPDATE membre SET  login='$set2' WHERE login='$set1';";
                    $sql2 = "SELECT idmembre FROM membre WHERE login='$set1'";
                    echo " le mot de passe  a &eacute;t&eacute; chang&eacute<br>;";
                    if (isset($sql) && !empty($sql2)) {
                            $link = mysqli_connect($HOST , $login, $pass, $database);
                            $req = mysqli_query($link,$sql2) or die('Erreur SQL !<br />'.$sql2.'<br />'.mysqli_error($link));
                            while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)) {
                                $ID=$data['idmembre'];
                                mysqli_close ($link);
                            }
                        $fileopen=(fopen("$file",'a'));
                        echo $data['idmembre'];
                        fwrite($fileopen,$eeee. "update Login ".$ID."\r");
                        fclose($fileopen);
                    }
                echo "Le login a bien &eacutet&eacute chang&eacute;<br>";
                }else{echo $champsvide;
                }
            }
        ?>
        <h3>Supprimer un compte</h3>
        <form name="form" action="" method="post">
            <p>
                <input type="text" name="set1" placeholder="Entrez un login">
                <input type="submit" name="go3" value="GO">
            </p>
        </form>
        <?php
            if (isset($_POST['go3']) && $_POST['go3'] == 'go') {
                if (isset($_POST['set1']) && !empty($_POST['set1'])) {
                    $set1 = $_POST['set1'];
                    $sql = "DELETE FROM membre WHERE login='$set1';";
                    $sql2 = "SELECT idmembre FROM membre WHERE login='$set1'";
                    echo "Le compte a bien été supprimé<br />;";
                    if (isset($sql) && !empty($sql2)) {
                        $link = mysqli_connect($HOST , $login, $pass, $database);
                        $req = mysqli_query($link,$sql2);
                        while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
                            $ID=$data['idmembre'];
                            mysqli_close ($link);
                        }
                        $fileopen=(fopen("$file",'a'));
                        echo $data['idmembre'];
                        fwrite($fileopen,$eeee. "SUPP Compte ".$ID."\r");
                        fclose($fileopen);
                    }
                }else{
                    echo $champsvide;
                }
            }
        ?>
    </div>
    <br>
    <header>
        <h1 class="sous_titre">Gestion de Client :</h1>
    </header>
    <div class='infos'>
        <h3>Ajouter un client</h3>
        <form name="test" action="" method="post">

            <p>Société possédant un CI Premium</p>
            <div class="squaredTwo">
                <input type="checkbox" value="None" id="squaredTwo" name="check" />
                <label for="squaredTwo"></label>
            </div>

            <input type="text" name="set1" placeholder="Entrez un nom" required>
            <input type="text" name="set2" placeholder="Entrez une adresse">
            <input type="number_format" min="0" minlength="5" maxlength="5" name="set3" placeholder="Entrez un code postal" required autofocus />
            <input type="text" name="set4" placeholder="Entrez une commune" required>
            <input id="d1" type="text" min="0" minlength="14" maxlength="14" name="set5" placeholder="Entrez un SIRET (14 chiffres)">
            <input type="text" name="set6" placeholder="Entrez une ann&eacute;e">
            <input type="text" name="set12" placeholder="Entrez un r&eacute;sum&eacute;">
            <input type="submit" value="GO" name="go4">
        </form>
        <h3>Tableau des clients</h3>
        <?php
                $link = mysqli_connect($HOST , $login, $pass, $database);
                if(!mysqli_set_charset($link,"utf8mb4")){//encodage  en utf8mb4
	                printf(mysqli_error($link));
	                exit();
                }
                echo "<div class='gril'>";
                $req = mysqli_query($link,$sql);
                //  if ($req) {
	            while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
		            echo "<th>";
		            echo "<div class='ca'>";
		 	        echo "<a href='detail.php?isbn=" . $data['Login'] . "'><img src='../img/Livres/" . $data["Isbn"] . ".jpg' class='img' alt=''></a><div align='center'>";
		 	        echo "<p class='pc'>Titre : " . $data["Titre"] . "</p>";
			        echo "</div>";
		            echo "</ul>";
                    echo "</div>";
	            }                    
            ?>
    </div>
</div>
<?php
        }
    }
    else{echo "Vous n'avez pas les droits pour accéder a cette page.";}
?>

<?php 
    require "footer.php";
?>

</body>

>>>>>>> 4a28eb6181ed92b2cf4e109fc37bafc2496a6552
</html> -->