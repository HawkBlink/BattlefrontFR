<?php


// Page pour vérifier si les entrées ne sont pas identiques dans la bdd
//On initialise une variable $pseudo qui vaut maintenant la données reçus
$pseudo = htmlspecialchars(htmlentities($_POST['pseudo']));
        //Requête : On lit les données correspondant au champ 'pseudo' dans la table membres
    $req = $bdd->query('SELECT pseudo FROM membres');
        // On lit toutes les données de la table grâce à une boucle
        while ($donnees = $req->fetch())
        {
            //On test chaque données pseudo : Si le pseudo reçus et le même qu'un pseudo déjà dans la table alors verif vaut 0
            if ($donnees['pseudo'] == $pseudo)
            {
                $verif = 0;
                //Et erreurpseudo vaut 0
                $erreurpseudo = 0;
            }
                else
                {
                    //Si non vaut 1
                    $erreurpseudo = 1;
                }
        }
        //On ferme la requête
        $req->closeCursor();

