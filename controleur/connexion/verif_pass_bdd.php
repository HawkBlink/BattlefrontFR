<?php
    include_once('../../modele/bdd/co_bdd.php');
    //On initialise une variable $pseudo qui vaut maintenant la données reçus
$ok1 = 0;
    $pass = htmlspecialchars(htmlentities($_POST['pass']));
    $pass_hache = htmlspecialchars(htmlentities(sha1($pass)));
    //Requête : On lit les données correspondant au champ 'pseudo' dans la table membres
    $req = $bdd->query('SELECT pass FROM membres');
    // On lit toutes les données de la table grâce à une boucle
        while ($donnees = $req->fetch())
        {
            //On test chaque données pseudo : Si le pseudo reçus et le même qu'un pseudo déjà dans la table alors verif vaut 1
            if ($donnees['pass'] == $pass_hache)
            {
                $verif = 1;
                //Et erreurpseudo vaut 1
                $erreur = 0;
                $ok1 = 1;
            }
            else
            {
                //Si non vaut 0
                $erreur = 1;
            }
        }
    //On ferme la requête
    $req->closeCursor();