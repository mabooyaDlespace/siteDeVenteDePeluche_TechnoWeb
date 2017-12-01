<?php

	function addProduct($nom_produit, $categorie, $description, $prix, $image)
	{
		try{
			$db = connectDB();
			$sql = 'INSERT INTO products(nom_produit, categorie, description, prix, image) VALUES (\''.$nom_produit.'\', \''.$categorie.'\', \''.$description.'\', \''.$prix.'\', \''.$image.'\')';
			$query = $db->exec($sql);
			$db = null;
			return true;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

	function deleteProduct($productid)
	{
		try{
			$db = connectDB();
			if(rechercherId($productid) != null){
				$sql = 'DELETE FROM products WHERE productid = \''.$productid.'\'';
				$query = $db->exec($sql);
				$db = null;
				return true;
			}
			else{
				return false;
			}
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

	function afficherTablePeluches() {
		$reponse = rechercherToutesLesPeluches();
    	if (!empty($reponse)) {
        	ob_start(); 
        	foreach ($reponse as $row) {
            	# code...
            	echo('<option value="'.$row['productid'].'">'.$row['nom_produit'].'</option>');
        	}
        return ob_get_clean();
    	}
	}


?>