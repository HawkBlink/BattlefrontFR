<?php
try{

$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u841625748_bat;charset=utf8;', 'u841625748_bat', 'lorraine4587', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch (Exception $e)
{
die ('Une erreur est survenue' . $e->getMessage());
}
