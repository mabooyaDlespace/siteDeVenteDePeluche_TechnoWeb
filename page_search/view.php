<!DOCTYPE html>
<html>
    <head>
        <!-- Nicolas Roi, Hugo Stenger et Loïc Schafran -->
        <title>Recherche</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
       
        
    </head>
    <body>
        <div id="myheader" >
<?php
require( "../includes/header.php");
?>
        </div>
        
        <form action="" method="get">

            <input type="text" placeholder="Tapez le produit à rechercher" name="query" id="searchbar">
            <input type="submit" value="Rechercher" name="search">

        </form>
        <span id="ex">Exemples : Disney, Pokémon, animal...</span>

        <table>
            <th>RESULTATS</th>
<?php echo $contenu_de_la_reponse_de_la_recherche;?>

        </table>

        <div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>

    </body>
</html>