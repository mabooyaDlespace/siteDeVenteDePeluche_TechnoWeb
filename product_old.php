<?php
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
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Rémi Willems, Romain Sens et Dylane Sidelhadj -->
        <title>Page Produit</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>


        <div id="myheader" >
<?php
require( "includes/header.php");
?>
        </div>
        <table>
            <th><?php echo $nameOfproduct ?></th>
            <tr><td><?php echo('<img src="images/' . $image . '.png">') ?></td></tr> <!--Images au format png -->
            <tr><td><?php echo $desc ?></td></tr>
            <tr><td><form method="get">Quantité ? <input type="number" value="1" min="1" max="10000" name="quantite"></form></td></tr>
            <tr><td><div id="basket"><?php echo $price ?>€</div><form method="get"><input type="submit" value="Ajouter au panier" id="addbasket" name="add"></form></td></tr>
        </table>

 <div id="myfooter"> <?php include_once 'includes/footer.html'; ?></div>

    </body>
</html>
