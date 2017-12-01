<?php

include('../database.php');
include('../modelStore.php');
include('../session.php');
include('../user.php');

require 'model.php';
$msgid = 0;
$msgquant = 0;
$msgErreur ="";
$var = getPanier();
$msgid = $var['msgid'];
$msgquant = $var['msgquant'];
$msgErreur =$var['msgErreur'];

$panier = panierUtilisateur($sessionid);
$contenu_panier = afficherPanier($panier);

if (isset($_GET['supprimer'])){
	deleteChoice($_GET['productid']);
	$contenu_panier = afficherPanier($panier);
}

require 'view.php';

