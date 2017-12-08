<?php
$absoluteDirectoryName="/sitedeventedepeluche_technoweb/";
require_once dirname(__FILE__).'/../database.php';
require_once dirname(__FILE__).'/../session.php';
require_once dirname(__FILE__).'/../user.php';
require_once dirname(__FILE__).'/checkSession.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Header</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <header>
            <div class="topnav">
                <a href="<?php echo $absoluteDirectoryName; ?>page_home/index.php"><img src="<?php echo $absoluteDirectoryName; ?>images/logo.png" id="homelogo" title="Acceuil"></a>
                <div class="topnavTexts">

                    <a href="<?php echo $absoluteDirectoryName; ?>page_search/index.php"><img src="<?php echo $absoluteDirectoryName; ?>images/searchlogo.png" id="searchlogo">Recherche</a>

                    <?php

                        if ($sessionid != "visiteur"){
                            echo('<div id="panier">
                            <a href="'.$absoluteDirectoryName.'page_panier/index.php"><img src="'.$absoluteDirectoryName.'images/panier-ajout.png" id="panierlogo">Panier</a>
                        </div>');
                        }

                    ?>

                    <?php

                        if ($sessionid == "visiteur"){
                            echo('<a href="'.$absoluteDirectoryName.'page_login/index.php" id="login">Authentification</a>');
                    
                        }
                    ?>
                    <?php if ($sessionid == "6"){
                    echo('<a id="buttonadmin" href="'.$absoluteDirectoryName.'admin.php">Admin</a>');
                } ?>
                </div>
                <?php

                    if ($sessionid != "visiteur"){
                        $temp1=returnUserConnection($sessionid);
                        echo('<a id="session" href="'.$absoluteDirectoryName.'page_profil/index.php"> Session :'.$temp1['name'].'</a>');
                    }

                ?>

                    
                </div>


            </div>
        </header>
    </body>
</html>
