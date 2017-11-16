<?php

    include('../database.php');
    require ('../modelStore.php');
    include('../session.php');
    include('../user.php');
	
	$id = 0;
	$name = "";
	$desc = "";
	$price = "";
	$image = "";
    $msgErreur = "";

    if (!empty($_GET['id'])){
        $id = $_GET['id'];
        $infos = rechercherId($id);

        $name = $infos['nom_produit'];
        $desc = $infos['description'];
        $price = $infos['prix'];
        $image = $infos['image'];
    }

    /* if (!empty($_GET['add']) || !empty($_GET['quantite'])){
        $quantite = $_GET['quantite'];
        $achat = ajouterAuPanier($id, $quantite);
        if ($achat){
            $msgid = $id;
            $msgquant = $quantite;
        }
        else{
            $msgErreur = "Erreur";
        }
    } */

?>

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
    
	<div><?php echo('<img src="../images/'.$image.'.png" id="produit">') ?></div>
	<H1 id="box1"><?php echo $name ?></H1>
    <div id="box3">Description du produit : <br><br>
		<?php echo $desc ?>
    </div>
    <div id="box2">
		<form method="get" action="../panier.php">Quantité <input type="number" value="1" min="1" max="10000" name="quantite">
        <br><br><br>
        <div  id="price"><?php echo $price ?>€</div><br>
		<div id="basket"><?php echo('<input type="hidden" name="id" value="'.$id.'">'); ?><input type="submit" value="Ajouter au panier" id="addbasket"><div><img id="panier1" src="../images/panier-ajout.png"></div></div></form>
    </div>

<!--<div id="myfooter"></div>-->
<div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>
</body>
</html>