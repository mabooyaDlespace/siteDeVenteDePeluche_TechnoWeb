<?php

    include('database.php');
    include('modelStore.php');
    include('session.php');
    include('user.php');

    $msgid = 0;
    $msgquant = 0;
    $msgErreur ="";

    if (!empty($_GET['quantite']) && !empty($_GET['id'])){
        $quantite = $_GET['quantite'];
        $id = $_GET['id'];
        $achat = ajouterAuPanier($id, $quantite);
        if ($achat){
            $msgid = $id;
            $msgquant = $quantite;
        }
        else{
            $msgErreur = "Erreur";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Rémi Willems, Loïc Schafran -->
	<title>Panier</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>

<div id="myheader" > <?php require( "includes/header.php");?> </div>
<br><br><br><br>
<div><?php echo  $msgErreur; ?></div>
<div><?php echo "Product_id :" . $msgid; ?></div>
<div><?php echo "Quantite :".$msgquant; ?></div>

<div id="myfooter"> <?php include_once 'includes/footer.html'; ?></div>

</body>
</html>