<?php
<<<<<<< HEAD

    include('database.php');
    include('store.php');
    include('session.php');
    include('user.php');

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

=======
include('database.php');
include('store.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $infos = rechercherId($id);

    $nameOfproduct = $infos['nom_produit'];
    $desc = $infos['description'];
    $price = $infos['prix'];
    $image = $infos['image'];
}

if (!empty($_GET['add']) || !empty($_GET['quantite'])) {
    $quantite = $_GET['quantite'];
    $achat = ajouterAuPanier($id, $quantite);
    if ($achat) {
        header("Location: panier.php");
    }
}
>>>>>>> 6f7f5f6d1c082593e1f02b941a0c5b905a95c666
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Rémi Willems, Romain Sens et Dylane Sidelhadj -->
	<title><?php echo $nameOfproduct ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>

<<<<<<< HEAD
    <div id="myheader" ></div>

<table>
	<th><?php echo $name ?></th>
	<tr><td><?php echo('<img src="'.$image.'.png">') ?></td></tr> <!--Images au format png -->
	<tr><td><?php echo $desc ?></td></tr>
    <tr><td><form method="get" action="panier.php">Quantité<input type="number" name="quantite"></td></tr>
	<tr><td><div id="basket"><?php echo $price ?>€</div><?php echo('<input type="hidden" name="id" value="'.$id.'">'); ?><input type="submit" value="Ajouter au panier" id="addbasket"></form></td></tr>
</table>

<div><?php echo $msgErreur ?></div>
<div><?php echo $msgid ?></div>
<div><?php echo $msgquant ?></div>

<div id="myfooter"></div>

=======
    <div id="myheader" >
<?php
require( "includes/header.php");
?>
        </div>
    
	<div><?php echo('<img src="images/' . $image . '.png" id="produit">') ?></div>
	<H1 id="box1"><?php echo $nameOfproduct ?></H1>
    <div id="box3">Description du produit : <br><br>
		<?php echo $desc ?>
    </div>
    <div id="box2">
		<form method="get">Quantité ? <input type="number" value="1" min="1" max="10000" name="quantite">
        <br><br><br>
        <div  id="price"><?php echo $price ?>€</div><br>
		<div id="basket"></div><input type="submit" value="Ajouter au panier" id="addbasket" name="add"><div><img id="panier1" src="images/panier-ajout.png"></div></form>
		
    </div>

<!--<div id="myfooter"></div>-->
<div id="myfooter"> <?php include_once 'includes/footer.html'; ?></div>
>>>>>>> 6f7f5f6d1c082593e1f02b941a0c5b905a95c666
</body>
</html>