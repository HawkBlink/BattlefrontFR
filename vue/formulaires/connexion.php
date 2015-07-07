<html>
    <head>
        <?php
        //on inclut l'entête
        include('../include/head.php'); ?>
    </head>
        <header>
            //on inclut le menu
            <?php include('../include/menu.php'); ?>
        </header>
            <body>
                                                                <!--==================================================-->
                                                                            <!--FORMULAIRE DE CONNEXION-->
                                                                <!--==================================================-->
                <div id="block_page">
                    <div class="container-fluid">
                        <div class="col-lg-6">
                            <form method="POST" action="../../vue/formulaires/connexion.php">
                                <fieldset>
                                    <form class="form-inline well">
                                        <div class="form-group">
                                            <legend class="color" ><h1>Inscription</h1></legend>
                                            <label class="color" for="pseudo" class="src">Pseudo : </label><input class="form-control input-lg" class="in" type="text" id="pseudo" name="pseudo" maxlength="15"/><br />
                                            <label class="color"  for="pass">Mot de passe : </label><input class="form-control input-lg" class="form-control" class="in" type="password" name="pass" id="pass" maxlength="20" /><br />
                                            <input class="btn btn-default btn-lg" class="in" value="Connexion" type="submit" name="connexion"/>
                                        </div>
                                                                <!--==================================================-->
                                                                            <!--FORMULAIRE DE CONNEXION-->
                                                                <!--==================================================-->
                                </fieldset>
                                    </form>
                        </div>
                        <?php
                        //on verif si le formulaire à bien était envoyer pour éviter les erreurs php et on sécurise la variable
                        if(htmlspecialchars(htmlentities(isset($_POST['connexion']))))
                        {
                            //on inclut Include verif qui correspond au données php
                            include_once('../../controleur/connexion/include_verif_co.php');
                        }
                        ?>
                    </div>
                </div>
        </body>
</html>
