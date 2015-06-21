<?php


// Page pour vérifier si les entrées ne sont pas identiques dans la bdd
//On initialise une variable $mail qui vaut maintenant la données reçus
$mail = htmlspecialchars(htmlentities($_POST['mail']));
    //Requête : On lit les données correspondant au champ 'email' dans la table membres
    $em = $bdd->query('SELECT email FROM membres');

        // On lit toutes les données de la table grâce à une boucle
        while ($donneesEm = $em->fetch())
        {
        //On test chaque données email : Si l'email reçus et le même qu'un email dans la table
            if ($donneesEm['email'] == $mail)
            {
                //alors verif vaut 0
                $verif = 0;
                //Erreurmail vaut 1
                $erreurmail = 0;

            }
                else
                {
                    //Si non vaut 0
                    $erreurmail = 1;}
        }

    //On ferme la requête
$em->closeCursor();
