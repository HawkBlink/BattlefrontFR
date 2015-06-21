<html>
    <head>
        <?php include('../include/head.php'); ?>
    </head>
        <header>
            <?php include('../include/menu.php'); ?>
        </header>
            <body>
                                                                <!--==================================================-->
                                                                            <!--FORMULAIRE DE CONNEXION-->
                                                                <!--==================================================-->
                <div id="block_page">
                    <div class="container-fluid">
                        <div class="col-lg-6">
                            <form method="POST" action="../../controleur/inscrip/include_verif_inscrip.php">
                                <fieldset>
                                    <form class="form-inline well">
                                        <div class="form-group">
                                            <legend class="color" ><h1>Inscription</h1></legend>
                                            <label class="color" for="pseudo" class="src">Pseudo : </label><input class="form-control input-lg" class="in" type="text" id="pseudo" name="pseudo" maxlength="15"/><br />
                                            <label class="color"  for="pass">Mot de passe : </label><input class="form-control input-lg" class="form-control" class="in" type="password" name="pass" id="pass" maxlength="20" /><br />
                                            <input class="btn btn-default btn-lg" class="in" type="submit" value="Envoyez" id="envoi"/>
                                        </div>
                                                                <!--==================================================-->
                                                                <!--FORMULAIRE DE CONNEXION-->
                                                                <!--==================================================-->
                                </fieldset>
                                    </form>
                        </div>
                    </div>
                </div>
        </body>
</html>
