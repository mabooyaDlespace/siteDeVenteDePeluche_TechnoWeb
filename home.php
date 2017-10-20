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

	<?php echo $deco ?>
	<div id="msg"><?php echo $msg ?></div>

	<div id="myfooter"></div>
</body>
</html>