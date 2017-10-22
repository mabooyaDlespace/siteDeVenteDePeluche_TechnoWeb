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
	<title>HomePage</title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>
	<div id="myheader" >
<?php
require( "includes/header.php");
?>
        </div>

	<div id="entname">Fluff'n'Stuff</div>


	<div id="msg"><?php echo $msg ?></div><?php echo $deco ?>


	<div id="myfooter"> <?php include_once 'includes/footer.html'; ?></div>
</body>
</html>