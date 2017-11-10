<?php

	if (!empty($_SESSION['userid'])){
		$sessionid = $_SESSION['userid'];
	}
	else{
		$sessionid = "visiteur";//session id est utilisé dans
	}

