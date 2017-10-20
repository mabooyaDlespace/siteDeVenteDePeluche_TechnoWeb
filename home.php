<?php

	include('database.php');
	include('session.php');
	include('user.php');

	$deco = "";
	if (!empty($sessionid)){
		$name = infosUser($sessionid);
		$deco = '<div id="lien"><a href="logout.php">Se déconnecter</a></div>';
	}
	else{
		$name = 'visiteur';
	}
	$msg = "Bienvenue " .$name;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue</title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(function () {
                $("#myheader").load("header.php");
                $("#myfooter").load("footer.html");
            });
        </script>
</head>
<body>
	<div id="myheader" ></div>

	<!-- <form action="" method="post">
		<input class="pseudoEtMDP" type="submit" value="Se déconnecter" name="deconnexion">
	</form> -->

	<?php echo $deco ?>

	<form method="post">
            <label class="saisieTexte"   for="username">Nom</label><br>
            <input type="text" placeholder="ex:Jean-Kevin" name="prenom" id="prenom"><br>
            <label class="saisieTexte" for="password">Prenom</label><br>
            <input  type="text" placeholder="ex :De la Canche" name="nom" id="nom"><br>
 
    </form>



	<div id="msg"><?php echo $msg ?></div>

	<div id="myfooter"></div>
</body>
</html>