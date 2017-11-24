<!DOCTYPE html>
<html>
<head>
	<!-- Rémi Willems, Loïc Schafran -->
	<title>Panier</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
        
</head>
<body>

<div id="myheader" > <?php require( "../includes/header.php");?> </div>
<br><br><br><br>
<div><?php echo  $msgErreur; ?></div>
<div><?php echo "Product_id :" . $msgid; ?></div>
<div><?php echo "Quantite :".$msgquant; ?></div>

<div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>

</body>
</html>