<?php

    include('database.php');
    include('store.php');
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
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(function () {
                $("#myheader").load("header.html");
                $("#myfooter").load("footer.html");
            });
        </script>
</head>
<body>

<div id="myheader" ></div>

<div><?php echo $msgErreur; ?></div>
<div><?php echo $msgid; ?></div>
<div><?php echo $msgquant; ?></div>

<div id="myfooter"></div>

</body>
</html>