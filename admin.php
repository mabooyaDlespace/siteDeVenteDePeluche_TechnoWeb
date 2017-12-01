<?php

    include('database.php');
    include('session.php');
    include('user.php');
    include('adminFunctions.php');
    include('modelStore.php');

    $tableau = afficherTablePeluches();

    /* if (isset($_GET['ajouterProduit'])){
    	$nom_produit = $_GET['nom_produit'];
    	$description = $_GET['description'];
    	$prix = $_GET['prix'];
    	$image = $_GET['image'];
        $ajout_produit = addProduct($nom_produit, $description, $prix, $image);
        if ($ajout_produit){
            $msgConfirmation = "Ajout réussi";
            $tableau = afficherTablePeluches();
        }
    }

    if (isset($_GET['supprimerProduit']) && isset($_GET['productid'])){
        $produitSupprime = deleteProduct($_GET['productid']);
        if ($produitSupprime){
            $msgConfirmation = "Suppression réussie";
            $tableau = afficherTablePeluches();
        }
    } */

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Rémi Willems, Loïc Schafran -->
	<title>Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>

<div id="myheader" > <?php require( "includes/header.php");?> </div>
<br><br><br><br>

<form method="get" action="validation.php">
    <fieldset>
        <legend>Ajouter produit</legend>
        <input required type="text" name="nom_produit" placeholder="Nom">
        <input required type="text" name="categorie" placeholder="Catégorie">
        <input required type="text" name="description" placeholder="Description">
        <input required type="text" name="prix" placeholder="Prix">
        <input required type="text" name="image" placeholder="Lien de l'image">
        <input type="hidden" name="ajouterProduit" value="1">
        <input required type="submit" value ="Ajouter">
    </fieldset>
</form>

<form method="get" action="validation.php">
	<fieldset>
		<legend>Supprimer produit</legend>
	<select name="productid">
    <?php 

        echo $tableau;

    ?>
	</select>
    <input type="hidden" name="supprimerProduit" value="1">
	<input type="submit" value="Supprimer">
	</fieldset>
</form>

<div id="myfooter"> <?php include_once 'includes/footer.html'; ?></div>

</body>
</html>