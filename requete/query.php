
<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die ('Erreur : ' . $e->getMessage());
}

$liste = $bdd->query('SELECT art_title, art_content FROM t_article ORDER BY art_id DESC LIMIT 0, 10');

while($donnes = $liste->fetch())
{
?>
    <article>
        <div class="jumbotron">
      <h1><?php echo htmlspecialchars($donnes['art_title']); ?></h1>
        </div>

    <p><?php echo nl2br(htmlspecialchars($donnes['art_content'])); ?></p>

    </article>

<?php
 }



$liste->closeCursor();