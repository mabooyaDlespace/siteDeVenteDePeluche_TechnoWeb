<?php

	session_start();

	define('DB_SERVER', 'localhost');
	define('DB_NAME', 'test_site');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');

	function connectDB()
	{
		$dbserver = DB_SERVER;
		$dbname = DB_NAME;
		$dbuser = DB_USER;
		$dbpassword = DB_PASSWORD;

		try{
			$bdd = new PDO('mysql:host='.$dbserver.'; dbname='.$dbname.'', $dbuser, $dbpassword);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return $bdd;
		}
		catch (PDOException $e){
			echo ('<br><br><br>   Connexion échouée: ' .$e->getMessage());
		}
	}


