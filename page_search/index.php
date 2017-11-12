<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'model.php';
$reponse_BDD=getResponse();
$contenu_de_la_reponse_de_la_recherche= afficherPeluches($reponse_BDD);
require 'view.php';