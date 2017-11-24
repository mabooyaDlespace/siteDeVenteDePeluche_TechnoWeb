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

function panierUtilisateur($userid) {
	//Permet de récupérer toutes les commandes d'un utilisateur
	
	try{
			$db = connectDB();
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM `products`,`paniers` WHERE `paniers`.`userid`='.$userid.' AND `products`.`productid` = `paniers`.`productid` ORDER BY `paniers`.`orderid`';
			$query = $db->query($sql);
			$db = null;
			return $query;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	
}

function afficherPanier($reponse) {
    if (!empty($reponse)) {
        ob_start(); 
        foreach ($reponse as $row) {
            # code...
            echo('<tr><td><a href="../page_product/index.php?productid=' . $row['productid'] . '">' . $row['nom_produit'] . '</a></td></tr>');
        }
        return ob_get_clean();
    }
}    