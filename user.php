<?php

	function connexion($username, $password)
	{
		try{
			$db = connectDB();
			$sql = 'SELECT * FROM users WHERE (username=\''.$username.'\' AND password=\''.$password.'\')';
			$query = $db->query($sql);
			$data = $query->fetch();
			$db = null;

			if (!empty($data))
			{
				$_SESSION['userid'] = $data['userid'];
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

	function deconnexion()
	{
		session_destroy();
		$_SESSION['userid'] = null;
	}

	function inscription($username, $password)
	{
		try{
			$db = connectDB();
			$sql = 'SELECT * FROM users WHERE username=\''.$username.'\'';
			$query = $db->query($sql);
			$data = $query->fetch();
			if (empty($data)){
				$insert = 'INSERT INTO users(username, password) VALUES (\''.$username.'\', \''.$password.'\')';
				$query = $db->exec($insert);
				$userid = $db->lastInsertId();
				$db = null;
				$_SESSION['userid'] = $userid;
				return true;
			}
			else{
				$db = null;
				return false;
			}
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

	function infosUser($userid)
	{
		try{
			$db = connectDB();
			$sql = 'SELECT * FROM users WHERE userid=\''.$userid.'\'';
			$query = $db->query($sql);
			$data = $query->fetch();
			$username = $data['username'];
			return $username;
		}
		catch (PDOException $e){
			echo ('Erreur: ' .$e->getMessage());
		}
	}

?>