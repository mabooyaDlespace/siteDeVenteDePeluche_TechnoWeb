<?php
$absoluteDirectoryName="http://localhost/TP/GitHubTP/";
//$suitableWrapper='"'.$absoluteDirectoryName.'includes/checkSession"';
require_once dirname(__FILE__).'/../database.php';
require_once dirname(__FILE__).'/../session.php';
require_once dirname(__FILE__).'/../user.php';
require_once dirname(__FILE__).'/checkSession.php';

//	$deco = "";
//	if (!empty($sessionid)){
//		$name = infosUser($sessionid);
//		$deco = '<div id="lien"><a href="logout.php">Se déconnecter</a></div>';
//	}
//	else{
//		$name = 'visiteur';
//	}
//	$msg = "Bienvenue " .$name;

?>

<!DOCTYPE html>
<!--
here
-->
<html>
    <head>
        <title>Header</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <header>
            <div class="topnav">
                <a href="<?php echo $absoluteDirectoryName; ?>page_home/index.php"><img src="<?php echo $absoluteDirectoryName; ?>images/logo.png" id="logo" title="Acceuil"></a>
                <div class="topnavTexts">
                    <a href="<?php echo $absoluteDirectoryName; ?>pagePresentationDesProduits">Produits</a>
                    <a href="<?php echo $absoluteDirectoryName; ?>page_search/index.php"><img src="<?php echo $absoluteDirectoryName; ?>images/searchlogo.png" id="searchlogo">Recherche</a>
                    <a href="<?php echo $absoluteDirectoryName; ?>page_login/index.php" id="login">Authentification</a>
                   <!--<?php $temp1=returnUserConnection();echo $temp1['name']; ?>  <?php echo $name = infosUser($sessionid); ?>
                        -->
                </div>
                <a id="session"> Session :<?php $temp1=returnUserConnection($sessionid);echo $temp1['name']; ?> </a>
            </div>
        </header>
    </body>
</html>
