<?php

	include('database.php');
	include('session.php');
	include('user.php');

	$name = infosUser($sessionid);
	$msg = "Bienvenue " .$name;
	$msgDeco = "";

	if (!empty($_POST['deconnexion'])){
            deconnexion();
            $msgDeco = "Vous êtes maintenant déconnecté.";
            $msg ="";
    }

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

	<form action="" method="post">
		<input class="pseudoEtMDP" type="submit" value="Se déconnecter" name="deconnexion">
	</form>

	<div id="msg"><?php echo $msg ?></div>
	<div id="msg"><?php echo $msgDeco ?></div>

	<div id="myfooter"></div>
</body>
</html>
