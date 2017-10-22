<?php
require_once dirname(__FILE__).'/../database.php';
require dirname(__FILE__).'/../session.php';
require_once dirname(__FILE__).'/../user.php';
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
   
}



       

function returnUserConnection($sessionid){
	$out['deco'] = "";
        $out['name'] = '☐ visiteur';
        if ($sessionid==="visiteur") {
                }
        elseif (!empty($sessionid)){
            $out['name'] = ' ☑ '.infosUser($sessionid);
            $out['deco'] = '<div id="lien"><a href="../logout.php">Se déconnecter</a></div>';
	}
	
		
                
	
	$out['message'] = "Bienvenue " .$out['name'];
        
        return $out;
}