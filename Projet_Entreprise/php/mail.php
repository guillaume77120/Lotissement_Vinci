<?php

    if(isset($_POST['prenom'])){

        if(isset($_POST['nom'])){

            if(isset($_POST['mail'])){

                if(isset($_POST['entreprise'])){

                    if(isset($_POST['commentaire'])){

                        if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['telephone'])){

                            $to = 'juliendubois02@yahoo.fr';

                            $subject="Portfolio";

                            $from = '';

                            $nom = htmlspecialchars($_POST["nom"]);

                            $prenom = htmlspecialchars($_POST["prenom"]);

                            $mail = htmlspecialchars($_POST["mail"]);

                            $telephone = htmlspecialchars($_POST["telephone"]);

                            $entreprise = htmlspecialchars($_POST['entreprise']);

                            // Pour envoyer du courrier HTML, l'en-tête Content-type doit être défini.

                            $headers="MIME-Version: 1.0" . "rn";

                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "rn";

                            // Créer les en-têtes de courriel

                            $headers .= 'From: '.$from."rn".

                                'Reply-To: '.$from."rn" .

                                'X-Mailer: PHP/' . phpversion();

                            // Composer un simple message électronique HTML

                            $message = nl2br(addslashes(htmlspecialchars($_POST["commentaire"])));

                            $message .= $nom . $prenom . $entreprise . $mail . $telephone;

                            // Envoi d'email

                            if(mail($to, $subject, $message, $headers)){

                                header("Location: contact.php?success");

                                

                            } 

                        }

                    }
                }   
            }

        }

    }

    header("location: contact.php?error");  

?>