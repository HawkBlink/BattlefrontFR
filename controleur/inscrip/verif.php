<?php
// Page pour vérifier si les entrées sont bien remplit et si les données existent déjà dans la bdd

/*
                                                                ================================
                                                                        Début des tests
                                                                ================================
*/
//Si le champ pseudo est remplit alors verif vaut 1 et on peut vérifier le champ pass
    if (htmlspecialchars(htmlentities(!empty($_POST['pseudo']))))
    {
        $verif = 1;
        //vérification de l'écriture du pseudo
        if(preg_match('`^([a-zA-Z0-9-_]{2,36})$`', htmlspecialchars(htmlentities($_POST['pseudo']))))
        {
            //On vérifit Si les champs pass et pass2 sont identiques et on vérifit si les champs sont remplient
            if (htmlspecialchars(htmlentities($_POST['pass'])) == htmlspecialchars(htmlentities($_POST['pass2'])))
            {
                //Si les champs pass et pass2 sont identiques
                //Alors on verifie si pass et remplit si c'est le cas alors verif vaut 1 et on peut vérifier le champ mail
                if (htmlspecialchars(htmlentities(!empty($_POST['pass']))))
                {
                    $verif = 1;
                    //Si le champ mail et remplit alors verif vaut 1
                    if (htmlspecialchars(htmlentities(!empty($_POST['mail']))))
                    {
                        $verif = 1;
                    } //Si non verif vaut 0
                        else
                        {
                            echo '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Le champ email n\'est pas remplit.</div><br />';
                                $verif = 0;

                        }
                } //Si non verif vaut 0
                            else
                            {
                                echo '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>le champ mot de passe n\'est pas remplit.</div><br />';
                                    $verif = 0;
                            }
            } //Si les champs pass et pass2  ne sont pas remplient alors verif vaut 0
                            else
                            {
                                echo '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Les mots de passe ne sont pas identitques.</div><br />';
                                    $verif = 0;
                            }
        }                       //Si non verif vaut 0
                                else
                                {
                                       echo '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Ce pseudo n\'est pas autorisé</div><br />';
                                        $verif = 0;
                                }
    }
                                    else
                                    {
                                        echo '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aucun champs n\'est remplit !</div><br />';
                                            $verif = 0;
                                    } //si verif vaut toujours 1 alors on continu en comparant les données reçus avec c'elle dans la bdd
                                        if ($verif == 1)
                                        {
                                            //On vérifit le pseudo et le mail en incluant les pages de verifs
                                            include_once('verifpseudo.php');
                                                include_once('verifmail.php');
                                        }