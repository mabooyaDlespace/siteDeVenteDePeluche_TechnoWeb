<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Nicolas Roi, Hugo Stenger et Loïc Schafran -->
        <title>Recherche</title>
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
            $query = $_GET['query'];

            $bdd = new PDO('mysql:host=localhost; dbname=test_site', 'root', '');
            $reponse = $bdd->query('SELECT * FROM products WHERE nom_produit=\''.$query.'\'');
            #$donnees = $reponse->fetch();
            #$id = $donnees['productid'];
        ?>

        <div id="myheader" ></div>
        <form action="search.php" method="get">

            <input type="text" placeholder="Tapez le produit à rechercher" name="query">
            <input type="submit" value="Rechercher">

        </form>
        <span id="ex">ex: disney, pokemon, animal...</span>

        <table>
            <th>RESULTS</th>
        <?php #echo('<a href="product.php?id='.$id.'">Resultat</a>');
                foreach ($reponse as $row) {
                    # code...
                    echo('<tr><td><a href="product.php?id='.$row['productid'].'">'.$row['nom_produit'].'</a></td></tr>');
                }
         ?>
        </table>

        <div id="myfooter"></div>

    </body>
</html>