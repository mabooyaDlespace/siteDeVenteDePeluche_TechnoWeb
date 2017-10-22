<?php
include('database.php');
include('store.php');

if (!empty($_GET['search'])) {
    $recherche = $_GET['query'];
    $reponse = rechercher($recherche);
}
if (empty($reponse)) {
    $reponse = afficherToutesLesPeluches();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Nicolas Roi, Hugo Stenger et Loïc Schafran -->
        <title>Recherche</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
       
        
    </head>
    <body>
        <div id="myheader" >
<?php
include_once 'header.php';
?>
        </div>
        
        <form action="" method="get">

            <input type="text" placeholder="Tapez le produit à rechercher" name="query" id="searchbar">
            <input type="submit" value="Rechercher" name="search">

        </form>
        <span id="ex">Exemples : Disney, Pokémon, animal...</span>

        <table>
            <th>RESULTATS</th>
<?php
#echo('<a href="product.php?id='.$id.'">Resultat</a>');
if (!empty($reponse)) {
    foreach ($reponse as $row) {
        # code...
        echo('<tr><td><a href="product.php?id=' . $row['productid'] . '">' . $row['nom_produit'] . '</a></td></tr>');
    }
}
?>
        </table>

        <div id="myfooter"> <?php include_once 'footer.html'; ?></div>

    </body>
</html>