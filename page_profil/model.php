<!-- Ici on ecris nos fonction php -->
<?php
    require('../database.php');
    require('../user.php');
    require('../session.php');
    
    $msgErreurConnexion = "";
    $msgErreurInscription = "";


function userName($userid)
{
    try{
        $db = connectDB();
        $sql = 'SELECT * FROM users WHERE userid=\''.$userid.'\'';
        $query = $db->query($sql);
        $data = $query->fetch();
        $username = $data['username'];
        return $username;
    }
    catch (PDOException $e){
        echo ('Erreur: ' .$e->getMessage());
    }
}

function name($userid)
{
    try{
        $db = connectDB();
        $sql = 'SELECT * FROM users WHERE userid=\''.$userid.'\'';
        $query = $db->query($sql);
        $data = $query->fetch();
        $username = $data['name'];
        return $username;
    }
    catch (PDOException $e){
        echo ('Erreur: ' .$e->getMessage());
    }
}

function surname($userid)
{
    try{
        $db = connectDB();
        $sql = 'SELECT * FROM users WHERE userid=\''.$userid.'\'';
        $query = $db->query($sql);
        $data = $query->fetch();
        $username = $data['surname'];
        return $username;
    }
    catch (PDOException $e){
        echo ('Erreur: ' .$e->getMessage());
    }
}

function password($userid)
{
    try{
        $db = connectDB();
        $sql = 'SELECT * FROM users WHERE userid=\''.$userid.'\'';
        $query = $db->query($sql);
        $data = $query->fetch();
        $username = $data['password'];
        return $username;
    }
    catch (PDOException $e){
        echo ('Erreur: ' .$e->getMessage());
    }
}

function renvoi_valeur($userid)
{
    try{
        $db = connectDB();
        $sql = 'SELECT * FROM users WHERE userid=\''.$userid.'\'';
        $query = $db->query($sql);
        $data = $query->fetch();
        $email = $data['email_address'];
        $phone = $data['phone_number'];
        $adress = $data['physical_address'];
        $mdp = $data['password'];
        $surname = $data['surname'];
        $name = $data['name'];
        $username = $data['username'];
        $tablo = array ($username,$name,$surname,$mdp,$adress,$phone,$email);
        //$tablo[$username,$name,$surname,$mdp,$adress,$phone,$email];
        return $tablo;
    }
    catch (PDOException $e){
        echo ('Erreur: ' .$e->getMessage());
    }
}

function phoneNumber($userid)
{
    try{
        $db = connectDB();
        $sql = 'SELECT * FROM users WHERE userid=\''.$userid.'\'';
        $query = $db->query($sql);
        $data = $query->fetch();
        $username = $data['phone_number'];
        return $username;
    }
    catch (PDOException $e){
        echo ('Erreur: ' .$e->getMessage());
    }
}

function physicalAddress($userid)
{
    try{
        $db = connectDB();
        $sql = 'SELECT * FROM users WHERE userid=\''.$userid.'\'';
        $query = $db->query($sql);
        $data = $query->fetch();
        $username = $data['physical_address'];
        return $username;
    }
    catch (PDOException $e){
        echo ('Erreur: ' .$e->getMessage());
    }
}


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
                header("Location: ../page_home/index.php");
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
 