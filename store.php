<?php

	function rechercher($name)
	{
		try{
			$db = connectDB();
			$sql = 'SELECT * FROM products WHERE nom_produit=\''.$name.'\'';
			$query = $db->query($sql);
			$db = null;
			return $query;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

	function rechercherId($id)
	{
		try{
			$db = connectDB();
			$sql = 'SELECT * FROM products WHERE productid=\''.$id.'\'';
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
<<<<<<< HEAD
			$sql = 'INSERT INTO paniers(userid, productid, quantite) VALUES (\''.$_SESSION['userid'].'\', \''.$item.'\', \''.$quantite.'\') ';
=======
			$sql = 'INSERT INTO paniers(userid, productid, quantite) VALUES (\''.$_SESSION['userid'].'\', \''.$item.'\', \''.$quantite.'\')';
>>>>>>> 07c35fbd9784e72bcdc1abe9511300b05e09cb6b
			$query = $db->exec($sql);
			$db = null;
			return true;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

	function afficherToutesLesPeluches()
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

?>