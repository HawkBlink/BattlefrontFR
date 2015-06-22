<?php
include_once('PHPMailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->Host = 'smtp.domaine.fr';
$mail->SMTPAuth   = true;
$mail->Port = 25; // Par défaut
$mail->CharSet = "utf-8";

// Expéditeur
$mail->SetFrom('battlefrontfr@battle.com', 'BattlefrontFR');
// Destinataire
$mail->AddAddress($_COOKIE['email'], '');
// Objet
$mail->Subject = 'BattlefrontFR';

// Votre message
$mail->MsgHTML('<h1>Inscription à BattlefrontFR</h1><br /><p>Cliquez ici pour activer votre compte -> <a href="#">BattlefrontFR Activation</a> </p>');

