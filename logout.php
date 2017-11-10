<?php

	include('database.php');
	
	$sessionid ='';
	$_SESSION['userid'] = '';

	if(empty($sessionid) && empty($_SESSION['userid']))
	{
		header("Location: page_home/index.php");
	}

?>
