<?php
    require('../database.php');
    require('../user.php');
    require('../session.php');
    
    $msgErreurConnexion = "";
    $msgErreurInscription = "";
function checIfUserExistAndConnexionWhenSubmitConnexion(){
    if (!empty($_POST['connexion'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username && !empty($password))){
            $connexion = connexion($username, $password);
            if ($connexion){
                header("Location: ../page_home/index.php");
            }
            else{
               return $msgErreurConnexion = "Nom d'utilisateur ou mot de passe erroné.";
            }
        }
        else{
            return $msgErreurConnexion = "Veuillez remplir les champs requis.";
        }
    }
}

function checIfUserExistAndConnexionWhenSubmitSinscrire(){
    if (!empty($_POST['inscription'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username && !empty($password))){
            $inscription = inscription($username, $password);
            if ($inscription){
                header("Location: page_home/index.php");
            }
            else{
               return $msgErreurInscription = "Ce nom d'utilisateur est déjà utilisé.";
            }
        }
        else{
            return $msgErreurInscription = "Veuillez remplir les champs requis.";
        }
    }

 }
    //$path='"../"'. (string) dirname(__FILE__);
 