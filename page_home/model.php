<?php

       
	include('../database.php');
	include('../session.php');
	include('../user.php');
        
	

function returnWelcomMessageAndLinkForDeconnectionIfUser($sessionid){
	$out['deco'] = "";//contient le lien pour se deconecter
        $out['sessionID12']=$sessionid ;
	if (!empty($sessionid)){
                $out['name'] = infosUser($sessionid);// == null si néxiste pas ex visiteur
		if (!empty($sessionid)&& !($sessionid==="visiteur") ){ // visiteur est la valeur par défaut de la session
        		$out['deco'] = '<div id="lien"><a href="../logout.php">Se déconnecter</a></div>';// on affiche un lien pour se deconnecter si session valide
        	}  else {
                     $out['name'] = "au visiteur de ce nouveau site!";
                }
                
	}
	
	$out['message'] = "Bienvenue " .$out['name'];
        
        return $out;
}