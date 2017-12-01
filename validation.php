<?php

    include('database.php');
    include('session.php');
    include('user.php');
    include('adminFunctions.php');
    include('modelStore.php');

    if (isset($_GET['ajouterProduit'])){
        $nom_produit = $_GET['nom_produit'];
        $categorie = $_GET['categorie'];
        $description = $_GET['description'];
        $prix = $_GET['prix'];
        $image = $_GET['image'];
        $ajout_produit = addProduct($nom_produit, $categorie, $description, $prix, $image);
        if ($ajout_produit){
            $msgValidation = "Produit ajouté.";
            $redirection = '<a href="admin.php">Retour à la page précédente</a>';
        }
    }

    if (isset($_GET['supprimerProduit'])){
        $produitSupprime = deleteProduct($_GET['productid']);
        if ($produitSupprime){
            $msgValidation = "Produit supprimé.";
            $redirection = '<a href="admin.php">Retour à la page précédente</a>';
        }
    }

    if (isset($_GET['ajouterAuPanier'])){
        $quantite = $_GET['quantite'];
        $id = $_GET['id'];
        $achat = ajouterAuPanier($id, $quantite);
        if ($achat){
            $msgValidation = "Produit ajouté au panier.";
            $redirection = '<a href="page_product/index.php?productid='.$id.'">Retour à la page précédente</a>';
        }
    }

    if (!isset($msgValidation)){
        $msgValidation = "L'opération a échoué.";
    }

    if (!isset($redirection)){
        $redirection = '<a href="page_home/index.php">Retour à l\'accueil</a>';
    }

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Rémi Willems, Loïc Schafran -->
	<title>Validation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>

<div id="myheader" > <?php require( "includes/header.php");?> </div>
<br><br><br><br>

<a><?php echo $msgValidation ?></a>
<br><br><br>
<a><?php echo $redirection ?></a>

<div id="myfooter"> <?php include_once 'includes/footer.html'; ?></div>

</body>
</html>