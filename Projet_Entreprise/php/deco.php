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





