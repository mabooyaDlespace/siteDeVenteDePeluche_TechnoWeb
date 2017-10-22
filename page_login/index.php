<?php


require 'model.php';
$msgErreurConnexion = checIfUserExistAndConnexionWhenSubmitConnexion();
$msgErreurInscription = checIfUserExistAndConnexionWhenSubmitSinscrire();
require 'view.php';