<?php

require_once '../database.php';

function checkIfProfilExist($userid) {
    try {
        $db = connectDB();
        $sql = 'SELECT REFERENCE_PROFIL FROM profil WHERE  profil.userid=\'' . $userid . '\'';
        $query = $db->query($sql);
        $data = $query->fetch();
        $db = null;
        return $data[REFERENCE_PROFIL];
    } catch (PDOException $e) {
        echo ('<br><br><br><br>Erreur: ' . $e->getMessage());
    }
}

function getREFERENCE_DU_PANIER_OfUser($userid) {
    try {
        $REFERENCE_PROFIL = checkIfProfilExist($userid);
        if (isset($REFERENCE_PROFIL) && !empty($REFERENCE_PROFIL)) {
            $db = connectDB();
            $sql = 'SELECT REFERENCE_DU_PANIER FROM panier WHERE  panier.userid=\'' . $userid . '\'';
            $query = $db->query($sql);
            $data = $query->fetch();
            $db = null;
            return $data[REFERENCE_DU_PANIER];
        }
    } catch (PDOException $e) {
        echo ('<br><br><br><br>Erreur: ' . $e->getMessage());
    }
}

function getALLFromLignePanierWithReferenceOfPanier($REFERENCE_DU_PANIER) {
    try {
        $db = connectDB();
        print_r($REFERENCE_DU_PANIER);
        $sql = $db->prepare('SELECT * FROM ligne_panier WHERE  ligne_panier.REFERENCE_DU_PANIER=\'' . $REFERENCE_DU_PANIER . '\'');
        $sql->execute();
        if (isset($sql) && !empty($sql)) {
            $data = $sql->fetchAll();
            $db = null;
            return $data;
        } else
            throw new PDOException("couldnt request ddata");

//            echo ('<br><br><br><br>Erreur: <br><br><br><br>');
    } catch (PDOException $e) {
        echo ('<br><br><br><br>Erreur: ' . $e->getMessage());
    }
}

function getALLFromLignePanierWithUser($userid) {
    try {
        $REFERENCE_DU_PANIER = getREFERENCE_DU_PANIER_OfUser($userid);
        if (isset($REFERENCE_DU_PANIER) && !empty($REFERENCE_DU_PANIER)) {
            $data = getALLFromLignePanierWithReferenceOfPanier($REFERENCE_DU_PANIER);
            return $data;
        }
    } catch (PDOException $e) {
        echo ('<br><br><br><br>Erreur: ' . $e->getMessage());
    }
}

function afficherpanierDuProfile($userid) {

    try {
        $data = getALLFromLignePanierWithUser($userid);
        if (!empty($data)) {
            ob_start();
            foreach ($data as $row) {
                echo("<br><br>REFERENCE_DU_PANIER:" . $row['REFERENCE_DU_PANIER'] . " <br>REFERENCE_LIGNE:" . $row['REFERENCE_LIGNE'] . " <br>productid:" . $row['productid'] . " <br>QUANTITE_DE_PELUCHE:" . $row['QUANTITE_DE_PELUCHE'] . "<br>");
            }
            $data = ob_flush();
            return $data;
        }
    } catch (PDOException $e) {
        echo ('<br><br><br><br>Erreur: ' . $e->getMessage());
        ob_clean();
    }
}

//function afficherReference_du_panierDuProfile($userid) {
//    try {
//        $REFERENCE_DU_PANIER  = getREFERENCE_DU_PANIER_OfUser($userid);
//        foreach ($REFERENCE_DU_PANIER as $row) {
//            echo("REFERENCE_DU_PANIER:" . $row['REFERENCE_DU_PANIER']);
//
//            return ob_clean();
//        }
//    } catch (PDOException $e) {
//        echo ('<br><br><br><br>Erreur: ' . $e->getMessage());
//    }
//}
