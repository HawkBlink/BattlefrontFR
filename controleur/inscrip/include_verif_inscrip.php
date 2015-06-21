<div class="col-lg-6">
    <div id="erreur">
        <?php
        include_once('../../modele/bdd/co_bdd.php');
            //Inclusion de la page de vérification en php
            include_once('verif.php');
                //Si verif vaut 1 alors ..

            if (htmlspecialchars(htmlentities($verif == 1))) {
                include_once('envoi_email.php');

                if (mail($to, $sujet, $texte, $headers) == 1) {
                    mail($to, $sujet, $texte, $headers);
                    echo '<div class="alert alert-success fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Un email vous à était envoyé pour activer votre compte</div><br />';
                    //Si tous c'est bien passé pas besoin d'afficher les erreurs donc elles valent 0
                    $erreurmail = 0;
                    $erreurpseudo = 0;

                } else {
                    echo 'Une erreur lors de l\'envoi du mail : veuillez ressayer plus tard';
                }


            }
                        //On test la variable $erreurmail (pour éviter les erreurs php)
                        if(htmlspecialchars(htmlentities(isset($erreurmail))))
                            {
                                //Si elle vaut 1 alors..
                                    if(htmlspecialchars(htmlentities($erreurmail == 1)))
                                    {
                                        ?>
                                            <!--On affiche un message d'erreur (Merci bootstrap)-->
                                            <div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Cet email existe déjà !</div><br />
                                        <?php
                                    }
                                        //Et verifie si erreurpseudo (pour éviter les erreurs php)
                                        if(htmlspecialchars(htmlentities(isset($erreurpseudo))))
                                            {
                                                //Si erreurpseudo vaut 1 alors..
                                                if (htmlspecialchars(htmlentities($erreurpseudo == 1)))
                                                    {
                                                        ?>
                                                            <!--On affiche un message d'erreur-->
                                                            <div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Ce pseudo existe déjà !.</div><br />
                                                        <?php
                                                    }
                                            }
                            }

header()
                                                        ?>