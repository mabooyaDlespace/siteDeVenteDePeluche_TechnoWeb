<?php



require 'model.php';

$temp=returnWelcomMessageAndLinkForDeconnectionIfUser($sessionid);
$msg=$temp['message'];
$deco=$temp['deco'];
require 'view.php';