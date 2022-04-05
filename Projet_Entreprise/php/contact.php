
<?php

    include 'header.php'; 

    
    if(isset($_GET['error'])){
        echo "<script>alert('Impossible d'envoyer des courriels. Veuillez réessayer.')</script>";
    }
    if(isset($_GET['success'])){
        echo '<script>alert("Votre message a été envoyé avec succès.")</script>';
    }
    
?>

    <div class="contenu">
        <section id="three">
	    <div style="justify-content: center">
			<h2 style="text-align: center">Me contacter :</h2>
            <form method="post" action="mail.php">
			<div>
                <input type="text" name="nom" id="nom" placeholder="Nom" />
                <input type="text" name="prenom" id="prenom" placeholder="Prénom" />
                <input type="email" name="mail" id="mail" placeholder="Mail" />
                <input type="text" name="entreprise" id="entreprise" placeholder="Entreprise" />
                <input type="tel" name="telephone" id="telephone" placeholder="Téléphone" />
                <textarea name="commentaire" id="commentaire" placeholder="Commentaire..." rows="4"></textarea>
            </div><br>
            <input type="submit" name= "submit" value="Envoyer"/>
								
		    </form>
	    </div>
        </section>
    </div>
<?php
    include 'footer.php'
?>

