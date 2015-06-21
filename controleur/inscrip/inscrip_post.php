<?php
$pseudo1 = htmlspecialchars($_POST['pseudo']);
    $mail1 = htmlspecialchars($_POST['mail']);
        $pass_hache = htmlspecialchars(sha1($_POST['pass']));
            include('verif.php');
                $prep = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
                    $prep->execute(array(

                        'pseudo' => $pseudo1,

                        'pass' => $pass_hache,

                        'email' => $mail1

                    ));