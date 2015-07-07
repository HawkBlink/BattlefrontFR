<?php
//on verifit si les champs sont bien remplient
include_once('verif.php');
//on verifit si le pseudo et le mot de pass correspondent à ce qu'il y a dans la base de données
include_once('verif_pseudo_bdd.php');
include_once('verif_pass_bdd.php');
//si tout est ok on vérifit si le compte et actif
include_once('actif_verif.php');
//on initialise $pseudo par la donnée envoyé.
$pseudo = $_POST['pseudo'];
    //on sécurise $verif (inutile mais on sait jamais) et pareil pour $erreur et $erreuractif
    if(htmlspecialchars(htmlentities($verif == 1)))
            {
                ?>
                <div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Vous êtes connecté !</div><br />
                <?php
            }
    else
       {
           $erreur = 1;
       }

        //On test la variable $erreur
        if(htmlspecialchars(htmlentities(isset($erreur))))
            {
            //Si $erreur vaut 1
            if (htmlspecialchars(htmlentities($erreur == 1)))
                {
                    ?>
                        <!--On affiche un message d'erreur-->
                        <div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Le pseudo ou le mot de passe ne sont pas correctes ou ce compte n'existe pas !</div><br />
                    <?php
                }
            }

                //on test la variable erreuractif pour éviter les erreurs php
                if(htmlspecialchars(htmlentities(isset($erreuractif))))
                    {
                        //Si $erreuractif vaut 1
                        if (htmlspecialchars(htmlentities($erreuractif == 1)))
                            {
                                ?>
                                    <!--On affiche un message d'erreur disant que le compte n'est pas activé-->
                                    <div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Votre compte n'est pas activé, vérifier vos mails !</div><br />
                                <?php
                        }
                    }