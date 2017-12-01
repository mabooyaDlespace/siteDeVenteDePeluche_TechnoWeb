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
	<br>
	<div>
		<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1.5" scrolldelay="0" direction="up" behavior="scroll" height="60">
			<div id="titleHomeScroll">
				Mise à jour du site en cours
			</div>
			<div id="textHomeScroll">
				Le site est actuellement manipulé par un groupe de 9 individus dans un but honorable de rendre tout celà joli et fonctionnel.
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
				<img id="evoliScroll" src="../images/evoli.png">
				<a href="../page_product/index.php?productid=1"><div id="lienProduit">Evoli</div></a>
			</div>

			<div>
				<img id="evoliScroll" src="../images/pikachu.png">
				<a href="../page_product/index.php?productid=3"><div id="lienProduit">Pikachu</div></a>
			</div>
		</marquee>
	</div>

	<form>
		<input type="radio" name="fancy" autofocus value="clubs" id="clubs" />
		<input type="radio" name="fancy" value="hearts" id="hearts" />
		<input type="radio" name="fancy" value="spades" id="spades" />
		<input type="radio" name="fancy" value="diamonds" id="diamonds" />			
		<label for="clubs">&#9827; Clubs</label><label for="hearts">&#9829; Hearts</label><label for="spades">&#9824; Spades</label><label for="diamonds">&#9830; Diamonds</label>

		<div class="keys">Utiliser les touches droite et gauche pour naviguer entre les images</div>
	</form>

	<div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>
</body>
</html>
