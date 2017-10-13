<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profil</title>
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
	<?php 
		function deconnexion(){
            session_destroy();

            echo('Vous êtes maintenant déconnecté');
        }

        if (isset($_POST['deconnexion'])){
            deconnexion();
        }
	 ?>
	<div id="myheader" ></div> 

	<form action="profile.php" method="post">
		<input class="pseudoEtMDP" type="submit" value="Se déconnecter" name="deconnexion">
	</form>

	<div id="myfooter"></div>
</body>
</html>