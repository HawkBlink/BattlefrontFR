<?php

// Page pour vérifier si les entrées sont bien remplit et si les données existent dans la bdd

/*
                                                ================================
                                                        Début des tests
                                                ================================
*/
    //Si le champ pseudo est remplit alors verif vaut 1 et on peut vérifier le champ mot de passe
    if (htmlspecialchars(htmlentities(!empty($_POST['pseudo']))))
    {
        $verif = 1;
    }
        //si non verif vaut 0 et erreur vaut 1
        else
        {
            $verif = 0;
            $erreur = 1;
        }
                //on verifi si le champ mot de passe est remplit alors verif vaut toujours 1
                if (htmlspecialchars(htmlentities(!empty($_POST['pass']))))
                {
                    $verif = 1;
                }
                        else
                        {
                            //sinon verif vaut 0 et erreur vaut 1
                            $verif = 0;
                            $erreur = 1;
                        }


/*
                                                ================================
                                                        Début des tests
                                                ================================
*/

