<?php

	$sessionid ='';
	$_SESSION['userid'] = '';

	if(empty($sessionid) && empty($_SESSION['userid']))
	{
		header("Location: login.php");
	}

?>