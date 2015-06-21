<?php  if(!empty($mail)) {
    htmlspecialchars(setcookie('mail', $_POST['mail'], time() + 365 * 24 * 3600, null, null, false, true));
}?>
<!--Dev by HawkBlink twitter = @HawkBlink -> DeadBlink-->

<html>
    <head>
        <?php include('../include/head.php'); ?>
    </head>
<header>
    <?php include('../include/menu.php'); ?>
</header>
    <body>
                                                                    <!--==================================================-->
                                                                                <!--FORMULAIRE D'INSCRIPTION-->
                                                                    <!--==================================================-->
        <div id="block_page">
            <div class="container-fluid">
                <div class="col-lg-6">
                    <form method="POST" action="../../controleur/inscrip/include_verif_inscrip.php">
                        <fieldset>
                            <form class="form-inline well">
                                <div class="form-group">
                                    <legend class="color" ><h1>Inscription</h1></legend>
                                        <label class="color" for="pseudo" class="src">Choix de votre pseudo : </label><input class="form-control input-lg" class="in" type="text" id="pseudo" name="pseudo" maxlength="15"/><br />
                                            <label class="color"  for="pass">Choix de votre mot de passe : </label><input class="form-control input-lg" class="form-control" class="in" type="password" name="pass" id="pass" maxlength="20" /><br />
                                                <label class="color" for="pass2">Retappez votre mot de passe : </label><input class="form-control input-lg" class="form-control" class="in" type="password" name="pass2" id="pass2" maxlength="20" /><br />
                                                    <label class="color" for="mail">Entrez votre adresse mail : </label><input class="form-control input-lg" class="form-control" class="in" type="email" name="mail" id="mail" maxlength="50" /><br />
                                                         <input class="btn btn-default btn-lg" class="in" type="submit" value="Envoyez" id="envoi"/>
                                </div>
                </div>
                                                                    <!--==================================================-->
                                                                                <!--FORMULAIRE D'INSCRIPTION-->
                                                                    <!--==================================================-->
                    </div>
                </div>
                        </fieldset>
                            </form>
            </div>
        </div>
    </body>
</html>
<!--Dev by HawkBlink twitter = @HawkBlink -> DeadBlink-->
