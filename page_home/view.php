<!DOCTYPE html>
<html>
<!-- Hugo Stenger -->
<head>
	<title>HomePage</title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
        
</head>
<body>
	<div id="myheader" >
		<?php require( "../includes/header.php");?>
	</div>

	<div id="entname">Fluff'n'Stuff</div>
	<br><br><br>
	<div>
		<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1.5" scrolldelay="0" direction="up" behavior="scroll" height="60">
			<div id="titleHomeScroll">
				Arrivage prochainement !
			</div>
			<div id="textHomeScroll">
				Le mois prochain déferlante de nouveautés ! Les peluches Disney font leur grande entrée et pour l'occasion elles vous serons proposés à des prix avantageux !
			</div>
		</marquee>
	</div>

	<div id="msg"><?php echo $msg . $deco ?></div>
	

	<div>
		<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" scrolldelay="0" direction="up" behavior="scroll" height="400" width="100">
			<div id="titleNoveltyScroll">
				Nouveautés :
			</div>
			<div>
				<img id="peluchesScroll" src="../images/evoli.png">
				<a href="../page_product/index.php?productid=1"><div id="lienProduit">Evoli</div></a>
			</div>

			<div>
				<img id="peluchesScroll" src="../images/pikachu.png">
				<a href="../page_product/index.php?productid=3"><div id="lienProduit">Pikachu</div></a>
			</div>
		</marquee>
	</div>
	<img id="homeImage" src="../images/peluches-pokemon.jpg">
	<div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>
</body>
</html>
