<?php 

include 'config.php';

if($_GET['action'] == "add"){

    echo 
    '

            <!-- SCRIPT -->

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        
            ';
            
            include "header.php";

            echo '

            <!-- MAIN CONTENT -->

            <div class="main">
                <div class="container"><br><br><br>
    				<div class ="grille">
    		<div class="formulaire"><form method="post" action="client.php?action=add">
                <fieldset class="formulaire">
                    <fieldset class="formulaire">
                    <legend>Ajoutez un client</legend>

                        <label for="name">Nom d\'utilisateur :</label><br>
                        <input type="text" id="name" name="name" autofocus required>
                        <br>
                        <label for="password">Mot de passe :</label><br>
                        <input type="password" id="password" name="password" required>
                        <br>
                </fieldset>
                <br>
                <div align="center">
                    <button class="formulaire" type="submit" name="submit">Confirmer</button></fieldset>
                </div>
            </form></div></div>
            <br><br><br>

                </div>
                <div align="center">
                    <a href="admin.php">Revenir sur le panel administrateur</a>
                </div>
            </div>';

            include "footer.php";

            

    if(isset($_POST['submit'])){
        if(isset($_POST['name'])){
            if(isset($_POST['password'])){
	
				$mot_de_passe=md5($_POST['password'],PASSWORD_DEFAULT);
                $sql = 'INSERT INTO membre (`mdp`, `login`) VALUES ("' . $mot_de_passe . '", "' . $_POST['name'] . '")';
                $result = mysqli_query($conn, $sql) or die();
                echo "<script>alert('Client inséré avec succès !');</script>";

            }
        } 
    }
}

if($_GET['action'] == "update"){

    if(isset($_GET['show'])){
        $row = mysqli_query($conn, 'SELECT * FROM membre');
        
        echo 
        '
                <!-- SCRIPT -->

                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
                ';
                include "header.php";

                echo '

                <!-- MAIN CONTENT -->

                <div class="container">
                    <div align="center">
                    <h1 class="title">Administration</h1>
                </div>

                </br>
';

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Identifiant de l'utilisateur</th>
            <th scope="col">Nom d'utilisateur</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($user = mysqli_fetch_array($row, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $user['idmembre'] ?></td>
            <td><?php echo $user['login'] ?></td>
            <td><?php echo $user['mdp'] ?></td>
            <td><?php echo '<a href="client.php?action=update&id=' . $user['idmembre'] . '">Modifier <i class="fa fa-pencil"></i></a>'; ?></td>
            <td><?php echo '<a href="client.php?action=delete&id=' . $user['idmembre'] . '" onclick="document.getElementById("id01").style.display="block"" >Supprimer <i class="fa fa-trash"></i></a>'; ?></td>
        </tr>

        <?php
                    }
                  ?>
    </tbody>
</table>
</br>
<div al
ign="center">
    <a href="admin.php">Revenir sur le panel administrateur</a>
</div>
</div>
<?php

            include "footer.php";
                }
    
}

if($_GET['action'] == "delete"){
    if(isset($_GET['id'])){
        
        echo '
            <!-- SCRIPT -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            ';
            include "header.php";
            echo '
            <!-- MAIN CONTENT -->
            <div class="container">
                <div align="center">
                <h1 class="title">Administration</h1>
            </div>
            </br>
        ';

        $intid = (int)$_GET['id'];
        
        $req='DELETE FROM membre WHERE idmembre = ' . $intid . '';
        $result = mysqli_query($conn, $req) or die();
            
        
        

        header('location: client.php?action=update&show');
        echo "<script>alert('Client supprimé avec succès !');</script>";

        include "footer.php";
    }
}


if($_GET['action'] == "update"){
    if(isset($_GET['id'])){
        include "header.php";
        echo
        '
                
                <!-- SCRIPT -->

                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                ';

                echo '

                <!-- MAIN CONTENT -->

                <div class="main">
                    <div class="container"><br><br><br>
                        <div class ="grille">
                <div class="formulaire"><form method="post" action="client.php?action=update&id=' . $intid . '">
                    <fieldset class="formulaire">
                        <fieldset class="formulaire">
                        <legend>Modifier un client</legend>
                        <label for="name">Nom d\'utilisateur :</label><br>
                        <input type="text" id="name" name="username" value="' . $user['login'] . '" autofocus required>
                        <br>
                        <label for="name">Mot de passe :</label><br>
                        <input type="text" id="password" name="password" value="' . $user['mdp'] . '" required>
                        <br>
                    </fieldset>
                    <br>
                    <div align="center">
                        <button class="formulaire" type="submit" name="submit">Confirmer</button></fieldset>
                    </div>
                </form></div></div>
                <br><br><br>

                    </div>
                    <div align="center">
                        <a href="admin.php">Revenir sur le panel administrateur</a>
                    </div>
                </div>';

                include "footer.php";

                

        if(isset($_POST['submit'])){
            if(isset($_POST['username'])){
                if(isset($_POST['id'])){
                    if(isset($_POST['pass'])){ 
                    
                         $sqlup = 'UPDATE membre SET login = "' . $_POST['login'] . '", mdp = "' . $_POST['pass'] . '" WHERE idmembre = ' . $intid;
                         $result = mysqli_query($conn, $sqlup) or die();
                    

                         header('location: client.php?action=update&show');
                         echo "<script>alert('Client modifié avec succès !');</script>";

                        
                    }
                }
            }
        }
    }
} 
?>