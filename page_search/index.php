<?php

require 'model.php';
$reponse_BDD=getResponse();
$contenu_de_la_reponse_de_la_recherche= afficherPeluches($reponse_BDD);
require 'view.php';

?>