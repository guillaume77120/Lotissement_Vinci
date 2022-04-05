<<<<<<< HEAD
<?php

error_reporting(0);

// Initialiser la session
session_start();

// Détruire la session.
if($_SESSION['open'] == 1){
    $_SESSION['open'] = "";
    $_SESSION['dis'] = 0;


    session_destroy();

} 
// Redirection vers la page de connexion
header("location: connexion.php?disconnected");

?>





=======
<?php

error_reporting(0);

// Initialiser la session
session_start();

// Détruire la session.
if($_SESSION['open'] == 1){
    $_SESSION['open'] = "";
    $_SESSION['dis'] = 0;


    session_destroy();

} 
// Redirection vers la page de connexion
header("location: connexion.php?disconnected");

?>





>>>>>>> 4a28eb6181ed92b2cf4e109fc37bafc2496a6552
