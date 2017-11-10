<?php

       
	include('../database.php');
	include('../session.php');
	include('../user.php');
        
	

function returnWelcomMessageAndLinkForDeconnectionIfUser($sessionid){
	$out['deco'] = "Hello!";
        $out['sessionID12']=$sessionid ;
	if (!empty($sessionid)){
		$out['name'] = infosUser($sessionid);
		$out['deco'] = '<div id="lien"><a href="../logout.php">Se déconnecter</a></div>';
	}
	else{
		$out['name'] = 'au nouveau visiteur';
                $out['deco'] = '<div id="lien"><a href="../logout.php">Se déconnecter</a></div>';
	}
	$out['message'] = "Bienvenue " .$out['name'];
        
        return $out;
}