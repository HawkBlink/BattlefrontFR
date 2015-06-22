<?php

    include_once('verif.php');

        if($verif == 1)
        {
            include_once('verif_pseudo_bdd.php');
                include_once('verif_pass_bdd.php');
            if($ok == 1)
        {
            echo'Le pseudo est ok';
        }
            else
            {
                echo 'prob pseudo';
            }
            if($ok1 == 1)
            {
                echo'Le mot de passe est ok';
            }
                else
                {
                    echo'prob pass';
                }
        }
            else
            {
               $erreur = 1;
            }

                //
                    if(htmlspecialchars(htmlentities(isset($erreur))))
                    {
                        //
                        if (htmlspecialchars(htmlentities($erreur == 1)))
                        {
                            ?>
                            <!--On affiche un message d'erreur-->
                            <div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Le pseudo ou le mot de passe ne sont pas correctes!</div><br />
                        <?php
                        }
                    }