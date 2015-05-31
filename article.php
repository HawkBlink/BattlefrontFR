<!DOCTYPE.PHP>
    <html>
        <head>
            <link rel="stylesheet" href="style.css"/>
            <meta charset="UTF-8"/>
        </head>
            <body>
            <form action="requete/art_insert.php" method="post">
                <label for="titre">Entrez un titre d'article : </label><input type="text" placeholder="Ex : Battlefront" maxlength="100" name="titre" id="titre"/>
                <label for="contenu">Entrez votre article : </label><input type="text" maxlength="2000" name="contenu" id="contenu"/>
                <input type="submit" value="Envoyer"/>
            </form>
            </body>
    </html>