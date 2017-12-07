<!DOCTYPE html>
<html>
<head>
	<!-- Rémi Willems, Romain Sens, Dylane Sidelhadj et Loïc Schafran -->
	<title><?php echo $name ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
        
</head>
<body>

    <div id="myheader" >
<?php   
require( "../includes/header.php");
?>
        </div>
    <div class=zoom>
 		<div class=image>
 			<?php echo('<img src="../images/'.$image.'.png" id="produit">') ?>
 		</div>
	</div>
	<H1 id="box1"><?php echo $name ?></H1>
    <div id="box3"><span id="titreSection">Description du produit : </span><br><br>
		<?php echo $desc ?>
    </div>
    <div id="box2">
		<form method="get" action="../validation.php"><span id="quantite">Quantité  : </span><input type="number" value="1" min="1" max="10000" name="quantite">
        <br><br><br>
        <div  id="price"><?php echo $price ?>€</div><br>
		<div id="basket"><?php echo('<input type="hidden" name="id" value="'.$id.'">'); ?><input type="hidden" name="ajouterAuPanier" value="1"><input type="submit" value="Ajouter au panier" id="addbasket"><div><img id="panier1" src="../images/panier-ajout.png"></div></div></form>
    </div>

<!--<div id="myfooter"></div>-->
<div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>
</body>
</html>