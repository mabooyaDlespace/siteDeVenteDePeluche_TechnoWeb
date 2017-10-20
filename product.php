<!DOCTYPE html>
<html>
<head>
	<!-- Rémi Willems, Romain Sens et Dylane Sidelhadj -->
	<title>Page Produit</title>
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
	<?php

		$id = $_GET['id'];
		$bdd = new PDO('mysql:host=localhost; dbname=test_site', 'root', '');
        $reponse = $bdd->query('SELECT * FROM products WHERE productid=\''.$id.'\'');
        $donnees = $reponse->fetch();
        $name = $donnees['nom_produit'];
        $desc = $donnees['description'];
        $price = $donnees['prix'];
        $image = $donnees['image'];

	?>

    <div id="myheader" ></div>

<table>
	<th><?php echo $name ?></th>
	<tr><td><?php echo('<img src="'.$image.'.png">') ?></td></tr> <!--Images au format png -->
	<tr><td><?php echo $desc ?></td></tr>
	<tr><td><div id="basket"><?php echo $price ?>€</div><input type="submit" value="Ajouter au panier" id="addbasket" name="add"></td></tr>
</table>

<div id="myfooter"></div>

</body>
</html>
