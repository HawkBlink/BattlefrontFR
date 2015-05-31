<?php
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die ('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO t_article(art_title, art_content) VALUES (?, ?)');
$req->execute(array($_POST['titre'], $_POST['contenu']));

header ("location: ../article.php");
?>