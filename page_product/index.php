<?php

//require_once('../database.php');
//require_once('../modelStore.php');
//    require_once('../session.php');
//    require_once('../user.php');

$productid = 0;
$name = "";
$desc = "";
$price = "";
$image = "";
$msgErreur = "";
require_once 'model.php';
$infO = getImageInfoFromDataBase();
$name = $infO['nom_produit'];
$desc = $infO['description'];
$price = $infO['prix'];
$image = $infO['image'];
$id=$infO['productid'];
require ('view.php');
