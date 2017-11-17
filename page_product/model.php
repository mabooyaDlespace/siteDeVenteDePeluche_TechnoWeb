
<?php

    require_once('../database.php');
    require_once ('../modelStore.php');
    require_once('../session.php');
    require_once('../user.php');
    /**
     * Permet d'avoir les infos du produit contenu dans la BDD
     */
    function getImageInfoFromDataBase(){

$infoDeLaPeluche['id']=0;
$infoDeLaPeluche['nom_produit']="";
$infoDeLaPeluche['description']="";
$infoDeLaPeluche['prix']="";
$infoDeLaPeluche['image']="";

    if (isset($_GET['productid'])&&!empty($_GET['productid'])){
        $id = $_GET['productid'];
        
        $infoDeLaPeluche = rechercherId($id);//Renvoie une trame de donnée contenant
        //le 'nom_du_produit'/'description'/'prix'/'image'
        
        $infoDeLaPeluche['productid']=$id;
        
        return $infoDeLaPeluche;
    }else  throw new Exception;

    /* if (!empty($_GET['add']) || !empty($_GET['quantite'])){
        $quantite = $_GET['quantite'];
        $achat = ajouterAuPanier($id, $quantite);
        if ($achat){
            $msgid = $id;
            $msgquant = $quantite;
        }
        else{
            $msgErreur = "Erreur";
        }
    } */}

?>