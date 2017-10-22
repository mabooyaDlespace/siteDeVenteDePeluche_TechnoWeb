<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('../database.php');
require('../store.php');

function getResponse() {
    if (!empty($_GET['search'])) {
        $recherche = $_GET['query'];
        $reponse = rechercher($recherche);
    }
    if (empty($reponse)) {
        $reponse = afficherToutesLesPeluches();
    }
    return $reponse;
}

function afficherPeluches($reponse) {
    if (!empty($reponse)) {
        foreach ($reponse as $row) {
            # code...
            echo('<tr><td><a href="../product.php?id=' . $row['productid'] . '">' . $row['nom_produit'] . '</a></td></tr>');
        }
    }
}
