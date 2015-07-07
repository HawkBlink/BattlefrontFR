<?php
// Récupération des variables nécessaires au mail de confirmation
$email = $_POST['mail'];
$pseudo = $_POST['pseudo'];
//Generation d'une clée aléatoire.
$cle1 = md5(microtime(TRUE)*100000);
    include_once('PHPMailer/class.phpmailer.php');

//information pour l'envoi du mail
                $mail = new PHPMailer();
                    $mail->Host = 'smtp.numericable.fr';
                        $mail->SMTPAuth = false;
                            $mail->Port = 25; // Par défaut
                                $mail->CharSet = "utf-8";

            // Expéditeur
            $mail->SetFrom('battlefrontfr@gmail.com', 'BattlefrontFR');
                // Destinataire
                $mail->AddAddress($email, '');
                    // Objet
                    $mail->Subject = 'Activation BattlefrontFR';

                        // Le message
                        $mail->MsgHTML('<h1>Activation de votre compte BattlefrontFR</h1><br /><p>Pour activer votre compte, veuillez cliquer sur le lien ci dessous ou copier/coller dans votre navigateur internet -> <a href="http://localhost/Battlefront/modele/validation/validation.php?log='.urlencode($pseudo).'&cle='.urldecode($cle1).'">http://localhost/Battlefront/modele/validation/validation.php?log='.urlencode($pseudo).'&cle='.urldecode($cle1).'</a><br /><br/>
                                            ---------------<br />
                                            Ceci est un mail automatique, Merci de ne pas y répondre.</p>');

