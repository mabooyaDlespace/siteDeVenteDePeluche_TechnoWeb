<!DOCTYPE html>
<html>
<head>
	<!-- Rémi Willems, Romain Sens et Dylane Sidelhadj -->
	<title>Evoli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>

    <div id="myheader" >
<?php
require( "includes/header.php");
?>
        </div>
    
	<img src="images/product.png" id="produit" ><!--id="touch"-->
	<H1 id="box1">Peluche Evoli</H1>
    <div id="box3">Description du produit
        Decouvrez Evoli, un des personnages prefere de la saga Pokemon.<br>
        La peluche Evoli de 20 cm et toutes ses evolutions enfin disponible !<br>
        <br>
        9 peluches à collectionner : Evoli, Aquali, Voltali, Pyroli, Mentali, Noctali, Phyllali, Givrali et Nymphali (vendus séparément)<br>
        <br>
        Retrouvez tous les produits Pokémon<br>
        Mises en garde nécessaires : <p id="red"><img id="panier1" src="images/Warning.png"> ATTENTION !</p> Ne convient pas à un enfant de moins de 3 ans.<br>
    </div>
    <div id="box2">
        <div class="rating">
            <a href="#5" title="Donner 5 étoiles">☆</a>
            <a href="#4" title="Donner 4 étoiles">☆</a>
            <a href="#3" title="Donner 3 étoiles">☆</a>
            <a href="#2" title="Donner 2 étoiles">☆</a>
            <a href="#1" title="Donner 1 étoile">☆</a>
        </div><br>
        <FORM>
        Quantité 
        <SELECT name="nom" size="1">
        <OPTION>1
        <OPTION>2
        <OPTION>3
        <OPTION>4
        <OPTION>5
        </SELECT>
        </FORM>
        <FORM> 
        <INPUT type="checkbox" name="nom" value="1"> Livraison en 1 jour (3 euros frais de port suplémentaire)
        </FORM>
        <br><br><br>
        <button id="orange"><img id="panier1" src="images/panier-ajout.png"> Ajouter au panier</button>
    </div>

<!--<div id="myfooter"></div>-->
<div id="myfooter"> <?php include_once 'includes/footer.html'; ?></div>
</body>
</html>