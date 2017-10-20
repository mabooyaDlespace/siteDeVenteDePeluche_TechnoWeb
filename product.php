<?php

    include('database.php');
    include('store.php');

    if (!empty($_GET['id'])){
        $id = $_GET['id'];
        $infos = rechercherId($id);

        $name = $infos['nom_produit'];
        $desc = $infos['description'];
        $price = $infos['prix'];
        $image = $infos['image'];
    }

?>

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
