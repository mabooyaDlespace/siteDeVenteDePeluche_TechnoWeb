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
	<br>
	<br>
	<div class="Scroller">
		<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="0" direction="up" behavior="scroll" height="40">
			<div id="titleHomeScroll">
				Mis à jour du site en cours
			</div>
			<br>
			<div id="textHomeScroll">
				Le site est actuellement manipulé par un groupe de 9 individus dans un but honorable de rendre tout celà joli et fonctionnel.
			<br>
			<br>
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
