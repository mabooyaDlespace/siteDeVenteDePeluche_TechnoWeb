<?php

function getPanier() {
	$tableau['msgid'] = 0;
	$tableau['msgquant'] = 0;
	$tableau['msgErreur'] ="";
	//$msgid
    //$msgquant 
    //$msgErreur 

    if (!empty($_GET['quantite']) && !empty($_GET['id'])){
        $quantite = $_GET['quantite'];
        $id = $_GET['id'];
        $achat = ajouterAuPanier($id, $quantite);
        if ($achat){
            $tableau['msgid'] = $id;
            $tableau['msgquant'] = $quantite;
        }
        else{
            $tableau['msgErreur'] = "Erreur";
        }
    }
	return $tableau;
}

    