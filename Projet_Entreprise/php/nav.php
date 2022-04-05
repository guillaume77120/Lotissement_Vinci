<<<<<<< HEAD
<?php 
    include "config.php";
    session_start();
?>

<nav>
    <ul>
        <?php if($_SESSION['open'] == 0){ ?>
        <li><a href="connexion.php">➕ Se Connecter</a></li>
        <?php }else{ ?>
        <li><a href="deco.php">➖ Se Déconnecter</a></li>
        <li><a href="membre.php">👤 Membre</a></li>
        <?php } ?>
        
        <li><a href="contact.php">🔗 Contact</a></li>
        <?php if($_SESSION['login'] == "admin"){ ?>
        <li><a href="admin.php">👥 Admin</a></li>
        <?php } ?>
    </ul>
</nav>
=======
<?php 
    include "config.php";
    session_start();
?>

<nav>
    <ul>
        <?php if($_SESSION['open'] == 0){ ?>
        <li><a href="connexion.php">➕ Se Connecter</a></li>
        <?php }else{ ?>
        <li><a href="deco.php">➖ Se Déconnecter</a></li>
        <li><a href="membre.php">👤 Membre</a></li>
        <?php } ?>
        
        <li><a href="contact.php">🔗 Contact</a></li>
        <?php if($_SESSION['login'] == "admin"){ ?>
        <li><a href="admin.php">👥 Admin</a></li>
        <?php } ?>
    </ul>
</nav>
>>>>>>> 4a28eb6181ed92b2cf4e109fc37bafc2496a6552
