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
	//Permet de récupérer le contenu du panier d'un utilisateur
	
	try{
			$db = connectDB();
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT `products`.nom_produit,SUM(`paniers`.`quantite`) as quantite,SUM(`products`.`prix` * `paniers`.`quantite`) as prix FROM `products`,`paniers` WHERE `paniers`.`userid`='.$userid.' AND `products`.`productid` = `paniers`.`productid` GROUP BY `products`.`productid`';
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
		echo('<table><thead><tr><td>Nom de l\'article</td><td>Quantité</td><td>Prix</td></tr>');
        foreach ($reponse as $row) {
            echo('<tr><td>'.$row['nom_produit'].'</td><td>'.$row['quantite'].'</td><td>'.round($row['prix'],2).'€</td></tr>');
        }
		echo('</table></thead>');
        return ob_get_clean();
    }
}