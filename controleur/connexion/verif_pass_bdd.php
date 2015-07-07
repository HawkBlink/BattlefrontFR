<?php
include_once('../../modele/bdd/co_bdd.php');
    //On initialise une variable $pseudo qui vaut maintenant la données reçus
    $pass = htmlspecialchars(htmlentities($_POST['pass']));
    $pass_hache = htmlspecialchars(htmlentities(sha1($pass)));

        //Requête : On lit les données correspondant au champ 'pseudo' dans la table membres
        $req = $bdd->query('SELECT pass FROM membres');
            // On lit toutes les données de la table grâce à une boucle
                while ($donnees = $req->fetch())
                    {
                    //On test chaque données pseudo : Si le pseudo reçus et le même qu'un pseudo déjà dans la table
                        if ($donnees['pass'] == $pass_hache)
                            {
                                //et verif vaut 1
                                $verif = 1;
                            }
                        else
                            {
                                //Si non verif vaut 0 et erreur 1
                                $erreur = 1;
                                $verif = 0;
                            }
                    }
//On ferme la requête
$req->closeCursor();