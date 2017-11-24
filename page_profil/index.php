<!-- Ici on appelle les fonction de model.php -->

<?php


require 'model.php';
$msgErreurConnexion = checIfUserExistAndConnexionWhenSubmitConnexion();
$msgErreurInscription = checIfUserExistAndConnexionWhenSubmitSinscrire();






$sessionid = $_SESSION['userid'];
$tablo = renvoi_valeur($sessionid) ;
//$tablo[$username,$name,$surname,$mdp,$adress,$phone,$email];
$username = $tablo[0];
$name = $tablo[1];
$surname = $tablo[2];
$email = $tablo[6];
$phoneNumber = $tablo[5];
$physicalAddress = $tablo[4];
$password = $tablo[3];

/*
$username = userName($sessionid);
$name = name($sessionid);
$surname = surname($sessionid);

$phoneNumber = phoneNumber($sessionid);
$physicalAddress = physicalAddress($sessionid);
$password = password($sessionid);
*/

require 'view.php';