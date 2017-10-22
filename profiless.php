<?php

	include('database.php');
        require("include/checkSession.php");
	include('session.php');
	include('user.php');

	$deco = "";
	if (!empty($sessionid)){
		$username = infosUser($sessionid);
		$deco = '<div id="lien"><a href="logout.php">Se déconnecter</a></div>';
	}
	else{
		$username = 'visiteur';
	}
	$msg = "Bienvenue " .$username;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue</title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        
        
</head>
<body>
	<div id="myheader" >
<?php
require( "includes/header.php");
?>
        </div>

	<!-- <form action="" method="post">
		<input class="pseudoEtMDP" type="submit" value="Se déconnecter" name="deconnexion">
	</form> -->

	<?php echo $deco ?>



	<form method="post">
            <label class="saisieTexte"   for="username">Nom</label><br>
            <input type="text" placeholder="<?php echo $surname; ?>" name="prenom" id="prenom"><br>
            <label class="saisieTexte" for="password">Prenom</label><br>
            <input  type="text" placeholder="<?php echo $name; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte" for="password">Adresse Email</label><br>
            <input  type="text" placeholder="<?php echo $email_address; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte" for="password">Telephone</label><br>
            <input  type="text" placeholder="<?php echo $phone_number; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte" for="password">Adresse</label><br>
            <input  type="text" placeholder="<?php echo $physical_address; ?>" name="nom" id="nom"><br>
            <input class="saisieTexte" type="submit" value="Submit" name="bouton">
 
    </form>



	<div id="msg"><?php echo $msg ?></div>

	 <div id="myfooter"> <?php include_once 'includes/footer.html'; ?></div>
</body>
</html>