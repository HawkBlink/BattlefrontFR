<?php
include_once('../../modele/bdd/co_bdd.php');
//On initialise une variable $pseudo qui vaut maintenant la données reçus
    $pseudo = htmlspecialchars(htmlentities($_POST['pseudo']));
    $ok = 0;

        //Requête : On lit les données correspondant au champ 'pseudo' dans la table membres
        $req = $bdd->query('SELECT pseudo FROM membres');

            // On lit toutes les données de la table grâce à une boucle
            while ($donnees = $req->fetch())
            {
                //On test chaque données pseudo : Si le pseudo reçus et le même qu'un pseudo déjà dans la table
                if ($donnees['pseudo'] == $pseudo)
                {
                    //alors verif vaut 1
                    $verif = 1;

                }
                    else
                    {
                        //Si non vaut 0 et erreur 1
                        $erreur = 1;
                        $verif = 0;
                    }
            }
//On ferme la requête
$req->closeCursor();