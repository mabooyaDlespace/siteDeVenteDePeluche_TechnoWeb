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

?>