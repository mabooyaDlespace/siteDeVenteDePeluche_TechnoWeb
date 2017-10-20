<?php

	if (!empty($_SESSION['userid'])){
		$sessionid = $_SESSION['userid'];
	}
	else{
		header('login2.php');
	}

?>