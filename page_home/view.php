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
		<marquee class="Scroller" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="0" direction="up" behavior="scroll" height="60">
			<div id="titleHomeScroll">
				Mise à jour du site en cours
			</div>
			<br>
<<<<<<< HEAD
			Le site est actuellement manipulé par un groupe de 9 individus dans un but honorable de rendre tout cela joli et fonctionnel.
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
=======
			<div id="textHomeScroll">
				Le site est actuellement manipulé par un groupe de 9 individus dans un but honorable de rendre tout celà joli et fonctionnel.
			</div>
>>>>>>> 353aa8598a4ab733f91e0729207bf8118eca99d4
		</marquee>
	</div>


	<div id="msg"><?php echo $msg ?></div>
	<div> 
		<?php 
		if ($sessionid==="visiteur") {
		}
        	elseif (!empty($sessionid)){
        		echo $deco;
        	}?>
	</div>



	<div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>
</body>
</html>
