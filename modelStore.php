<?php

	function rechercher($name)
	{
		try{
			$db = connectDB();
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM products WHERE nom_produit LIKE \'%'.$name.'%\'';
			$query = $db->query($sql);
			$db = null;
			return $query;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

	function rechercherId($productid)
	{
		try{
			$db = connectDB();
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM products WHERE productid=\''.$productid.'\'';
			$query = $db->query($sql);
			$data = $query->fetch();
			$db = null;
			return $data;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

	function ajouterAuPanier($item, $quantite)
	{
		try{
			$db = connectDB();
			$sql = 'INSERT INTO paniers(userid, productid, quantite) VALUES (\''.$_SESSION['userid'].'\', \''.$item.'\', \''.$quantite.'\') ';
			$query = $db->exec($sql);
			$db = null;
			return true;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}
        
        function ajouterAuPanierJC($item, $quantite)
	{
		try{
                        
			$db = connectDB();
			$sql = 'INSERT INTO paniers(userid, productid, quantite) VALUES (\''.$_SESSION['userid'].'\', \''.$item.'\', \''.$quantite.'\') ';
			$query = $db->exec($sql);
			$db = null;
			return true;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}
        
	function rechercherToutesLesPeluches()
	{
		try{
			$db = connectDB();
			$sql = 'SELECT * FROM products';
			$query = $db->query($sql);
			$db = null;
			return $query;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

	function viderPanier()
	{
		try{
			$db = connectDB();
			$sql = 'DELETE FROM paniers WHERE userid = \''.$_SESSION['userid'].'\'';
			$query = $db->exec($sql);
			$db = null;
			return true;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

?>