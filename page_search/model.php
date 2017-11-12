<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('../database.php');
require('../store.php');

//$testing=0;
//if (!empty($_GET['search'])) {
//$testing= $_GET['query'];
//$testing=1;
//    }
/**
 * get le submit "search" du boutton Rechercher de la bage search
 * marche si on tape la totalité
 * ou
 * Renvoie la totalité des peluche sinon 
 * @return type
 */
function getResponse() {
    $reponse="";//il faut initier a null 
    if (!empty($_GET['search']&& !empty($_GET['query']))) {
        $recherche = $_GET['query'];
        $reponse = rechercher($recherche);// renvoi un non empty meme si pas de resultat
    }
    
    if(empty($reponse)) {
        $reponse = rechercherToutesLesPeluches();
    }
    
    return $reponse;
}
/**
 * permet d'afficher une reponse de ma base de données
 * 
 * @param type $reponse
 * @return type return du code html qu'on flush dans une variable
 */
function afficherPeluches($reponse) {
    if (!empty($reponse)) {
        ob_start(); 
        foreach ($reponse as $row) {
            # code...
            echo('<tr><td><a href="../product.php?id=' . $row['productid'] . '">' . $row['nom_produit'] . '</a></td></tr>');
        }
        return ob_get_clean();
    }
}
