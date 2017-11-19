<?php

require '../models/modelProfile.php';
//echo afficherpanierDuProfile(1);
$var = checkIfProfilExist(1);
echo "numdu profil " . $var;
$var = getREFERENCE_DU_PANIER_OfUser($var);
echo "num du panier " . $var;
$var= getALLFromLignePanierWithReferenceOfPanier($var);
foreach($var as $row){
echo("<br><br>REFERENCE_DU_PANIER:" . $row['REFERENCE_DU_PANIER'] . " <br>REFERENCE_LIGNE:" . $row['REFERENCE_LIGNE'] . " <br>productid:" . $row['productid'] . " <br>QUANTITE_DE_PELUCHE:" . $row['QUANTITE_DE_PELUCHE']);
}


$var=getALLFromLignePanierWithUser(1);
foreach($var as $row){
echo("<br><br>REFERENCE_DU_PANIER:" . $row['REFERENCE_DU_PANIER'] . " <br>REFERENCE_LIGNE:" . $row['REFERENCE_LIGNE'] . " <br>productid:" . $row['productid'] . " <br>QUANTITE_DE_PELUCHE:" . $row['QUANTITE_DE_PELUCHE']);
}
echo "<br><br><br><br>";

$var=afficherpanierDuProfile(1);

