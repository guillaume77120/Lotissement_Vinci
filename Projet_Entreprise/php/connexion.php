<<<<<<< HEAD
<?php 
	require "header.php"

?>
<?php
  session_start();
  include "config.php";

  if(isset($_GET['notconnected'])){
	  echo"<script>alert ('Vous n'êtes pas connecté, nous vous avons redirigé vers la page de connection.');</script>";
  }
  if(isset($_GET['disconnected']) && $_SESSION['dis'] == 0){
    echo"<script>alert ('Vous avez bien été déconnecté.');</script>";
    $_SESSION['dis'] = 1;
  }

  if($_SESSION['open'] == 0){
?>
<div class='espace_m'>
    <h1 class="title">Connexion à l'espace membre :</h1>
    <br>
            <?php

if(isset($_POST['Connexion'])){
  if (isset($_POST['login']) && (isset($_POST['pass']))){
    $login = stripslashes($_REQUEST['login']);
    $login = mysqli_real_escape_string($conn, $login);
    $pass = stripslashes($_REQUEST['pass']);
    $pass = mysqli_real_escape_string($conn, $pass);
  	$query = "SELECT * FROM `membre` WHERE login ='$login' and mdp='".hash('md5', $pass)."'";
    $result = mysqli_query($conn,$query) or die();
    $rows = mysqli_num_rows($result);
    if($rows==1){
      $_SESSION['login'] = $login;
  	  $_SESSION['open'] = 1;
      header("Location: membre.php");
    
    }elseif($rows>1){
  	  $message = "Il y a plusieurs utilisateurs au même nom que vous. Veuillez contacter l'administrateur.";
    }
    else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
            <form class="box" action="" method="post" name="login">

                <h1 class="box-title">Connexion</h1>
                <input type="text" class="box-input" name="login" placeholder="Nom d'utilisateur">
                <input type="password" class="box-input" name="pass" placeholder="Mot de passe"><br>
                <input type="submit" value="Connexion " name="Connexion" class="box-button">

                <?php if (!empty($message)) { ?>
                <p class="errorMessage" style="color: red"><?php echo $message; ?></p>
                <?php } ?>
        
</div>
<?php 
  }else{
	echo'Vous êtes déja connecté. <a href="deco.php"> Me déconnecter</a>';
  }
?>
<?php 
	require "footer.php"
?>

=======
<?php 
	require "header.php"

?>
<?php
  session_start();
  include "config.php";

  if(isset($_GET['notconnected'])){
	  echo"<script>alert ('Vous n'êtes pas connecté, nous vous avons redirigé vers la page de connection.');</script>";
  }
  if(isset($_GET['disconnected']) && $_SESSION['dis'] == 0){
    echo"<script>alert ('Vous avez bien été déconnecté.');</script>";
    $_SESSION['dis'] = 1;
  }

  if($_SESSION['open'] == 0){
?>
<div class='espace_m'>
    <h1 class="title">Connexion à l'espace membre :</h1>
    <br>
            <?php

if(isset($_POST['Connexion'])){
  if (isset($_POST['login']) && (isset($_POST['pass']))){
    $login = stripslashes($_REQUEST['login']);
    $login = mysqli_real_escape_string($conn, $login);
    $pass = stripslashes($_REQUEST['pass']);
    $pass = mysqli_real_escape_string($conn, $pass);
  	$query = "SELECT * FROM `membre` WHERE login ='$login' and mdp='".hash('md5', $pass)."'";
    $result = mysqli_query($conn,$query) or die();
    $rows = mysqli_num_rows($result);
    if($rows==1){
      $_SESSION['login'] = $login;
  	  $_SESSION['open'] = 1;
      header("Location: membre.php");
    
    }elseif($rows>1){
  	  $message = "Il y a plusieurs utilisateurs au même nom que vous. Veuillez contacter l'administrateur.";
    }
    else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
            <form class="box" action="" method="post" name="login">

                <h1 class="box-title">Connexion</h1>
                <input type="text" class="box-input" name="login" placeholder="Nom d'utilisateur">
                <input type="password" class="box-input" name="pass" placeholder="Mot de passe"><br>
                <input type="submit" value="Connexion " name="Connexion" class="box-button">

                <?php if (!empty($message)) { ?>
                <p class="errorMessage" style="color: red"><?php echo $message; ?></p>
                <?php } ?>
        
</div>
<?php 
  }else{
	echo'Vous êtes déja connecté. <a href="deco.php"> Me déconnecter</a>';
  }
?>
<?php 
	require "footer.php"
?>

>>>>>>> 4a28eb6181ed92b2cf4e109fc37bafc2496a6552
