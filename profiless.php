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
            <input type="text" placeholder="<?php echo $name; ?>" name="prenom" id="prenom"><br>
            <label class="saisieTexte" for="password">Prenom</label><br>
            <input  type="text" placeholder="<?php echo $name; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte" for="password">Adresse Email</label><br>
            <input  type="text" placeholder="<?php echo $name; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte" for="password">Telephone</label><br>
            <input  type="text" placeholder="<?php echo $name; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte" for="password">Adresse</label><br>
            <input  type="text" placeholder="<?php echo $name; ?>" name="nom" id="nom"><br>
            <input class="saisieTexte" type="submit" value="Submit" name="bouton">
 
    </form>



	<div id="msg"><?php echo $msg ?></div>

	<div id="myfooter"></div>
</body>
</html>