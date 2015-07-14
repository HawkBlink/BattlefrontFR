<?php
//Connexion à la BDD
include_once('../../modele/bdd/co_bdd.php');
//on initialise $pseudo par la données reçus et on sécurise.
$pseudo = htmlspecialchars($_POST['pseudo']);
        // Récupération de la valeur du champ actif pour le login $login
        $prep = $bdd->prepare("SELECT actif FROM membres WHERE pseudo like :pseudo ");

            //si le pseudo et trouver dans la bdd alors row fait que actif qui est de base sur 0 devient 1
            if($prep->execute(array(':pseudo' => $pseudo))  && $row = $prep->fetch())
                {
                    $actif = $row['actif']; // actif contiendra alors 1
                }

//on ferme la requête
$prep->closeCursor();

                if(isset($actif))//on évite les erreurs php en testant la variable
                    {
                        if ($actif == 1) // Si $actif est égal à 1
                            {
                                //verif vaut 1
                                $verif = 1;

                            }
                        else
                            {
                                //sinon verif vaut 0 et un message d'erreur vaut 1
                                $verif = 0;
                                $erreuractif = 1;
                            }
                    }