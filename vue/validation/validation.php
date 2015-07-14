<html>
<?php
//Connexion à la BDD
include_once('../../modele/bdd/co_bdd.php');

if(htmlspecialchars(isset($_GET['log'])) && htmlspecialchars(isset($_GET['cle'])))
{
    $pseudo = htmlspecialchars($_GET['log']);
    $cle = htmlspecialchars($_GET['cle']);

    $prep = $bdd->prepare('SELECT cle, actif FROM membres WHERE pseudo LIKE :pseudo');
    if($prep->execute(array(
            'pseudo' => $pseudo)) && $donnees = $prep->fetch())
    {
        $clebdd = $donnees['cle'];	// Récupération de la clé
        $actif = $donnees['actif']; // $actif contiendra alors 0 ou 1
    }

//On teste la valeur de la variable $actif récupéré dans la BDD
    if($actif == '1') // Si le compte est déjà actif on prévient
    {
        echo "<p>Votre compte est déjà actif !</p>";
    }
    else // Si ce n'est pas le cas on passe aux comparaisons
    {
        if($cle == $clebdd) // On compare nos deux clés
        {
            // Si elles correspondent on active le compte !
            echo "<p>Votre compte a bien été activé !</p>";

            // La requête qui va passer notre champ actif de 0 à 1
            $prep = $bdd->prepare("UPDATE membres SET actif = 1 WHERE pseudo like :pseudo ");
            $prep->bindParam(':pseudo', $pseudo);
            $prep->execute();
        }
        else // Si les deux clés sont différentes on provoque une erreur...
        {
            echo "<p>Erreur ! Votre compte ne peut être activé...</p>";
        }
    }
}
else
{
    echo'Erreur';
}


?>

</html>