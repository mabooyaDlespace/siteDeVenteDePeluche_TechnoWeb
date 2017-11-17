<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('../database.php');
require('../modelStore.php');

//$testing=0;
//if (!empty($_GET['search'])) {
//$testing= $_GET['query'];
//$testing=1;
//    }
/**
 * get le submit "search" du boutton Rechercher de la bage search
 * marche si on tape la totalité
 * ou
 * Renvoie la totalité des peluches sinon 
 * @return type
 */
function getResponse() {
    $reponse="";//il faut initier a null 
    if (isset($_GET['search'])&&!empty($_GET['search']&& !empty($_GET['query']))) {
        $recherche = $_GET['query'];
        $reponse = rechercher($recherche);// renvoi un non empty meme si pas de resultat
    }
    
    if(empty($reponse)) {
        $reponse = rechercherToutesLesPeluches();
    }
    
    return $reponse;
}
/**
 * Permet de générer des liens pour acceder au produit
 * product id est passé en global pour pouvoir être utilisé par product.php
 *  ie voir page_product/product.php
 * 
 * 
 * @param type $reponse de BDD
 * @return type return du code html qu'on flush dans une variable avc le clean()
 */
function afficherPeluches($reponse) {
    if (!empty($reponse)) {
        ob_start(); 
        foreach ($reponse as $row) {
            # code...
            echo('<tr><td><a href="../page_product/index.php?productid=' . $row['productid'] . '">' . $row['nom_produit'] . '</a></td></tr>');
        }
        return ob_get_clean();
    }
}
