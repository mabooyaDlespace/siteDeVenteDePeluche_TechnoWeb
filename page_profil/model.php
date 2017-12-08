<!-- Ici on ecris nos fonction php -->
<?php
    require('../database.php');
    require('../user.php');
    require('../session.php');
    
    $msgErreurConnexion = "";
    $msgErreurInscription = "";


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

function modif_userName($username)
{
    try{
        $db = connectDB();
        $sql = 'SELECT * FROM users WHERE username=\''.$username.'\'';
        $query = $db->query($sql);
        $data = $query->fetch();

        $insert = 'INSERT INTO users(username) VALUES \''.$username.'\'';
        $query = $db->exec($insert);
        $userid = $db->lastInsertId();
        $db = null;
        $_SESSION['userid'] = $userid;
        return true;

    }
    catch (PDOException $e){
        echo ('<br><br><br><br>Erreur: ' .$e->getMessage());
    }
}


function validationModif(){

    if (!empty($_POST['validation'])){
        
        

        try{

        //$data = array('userid'=>$user);
                $prenom = $_POST['prenom'];
                $password = $_POST['password'];
                $name = $_POST['nom'];
                $email = $_POST['email'];
                $phoneNumber = $_POST['phoneNumber'];
                $physicalAddress = $_POST['address'];
                $data = [];
                var_dump($_POST);
                $userid = $_SESSION['userid'] ;
                $db = connectDB();
                //$quantite = $_POST['quantite'];


                $set="";

                if (isset($_POST['prenom']) && $_POST['prenom']!=""){ //Celui du form
                    $set.="username=:username,";//celui bdd puis celui form
                    $data['username']=$prenom;//celui bdd puis form
                }
               if (isset($_POST['password']) && $_POST['password']!=""){ 
                    $set.="password=:password,";
                    $data['password']=$password;
                }
                if (isset($_POST['email']) && $_POST['email']!=""){
                    $set.="email:=email,";
                    $data['email']=$email;
                }
                if (isset($_POST['nom']) && $_POST['nom']!=""){
                    $set.="nom=:name,";
                    $data['name']=$name;
                }
                if (isset($_POST['phoneNumber'])&& $_POST['phoneNumber']!=""){
                    $set.="phone_number:=phone_number,";
                    $data['phone_number']=$phoneNumber;
                }
                if (isset($_POST['address'])&& $_POST['address']!=""){
                    $set.="physical_address=:physical_address";
                    $data['physical_address']=$physicalAddress;
                }
                //var_dump($data);

       /* $prenom = $_POST['prenom'];
        $password = $_POST['password'];
        $name = $_POST['nom'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $physicalAddress = $_POST['adresse'];

        $sql = "UPDATE `users` SET `password`=$password,`surname`=$prenom,`name`=$name,`email_address`=$email,`phone_number`=$phoneNumber,`physical_address`=$physicalAddress WHERE userid=$userId" ;




    UPDATE `users` SET `surname`=dsds wHERE 1
*/              
                var_dump($set);
                $query = 'update users SET '. $set .' where userid=:userid';
                //$userid = intval($userid);
               $data['userid']=$userid ;
                 var_dump($query);
                 var_dump($data);
                $stmt =  $db ->prepare($query);
               $stmt -> execute($data);
         /*echo($sql);
        $query = $db->query($sql);
        $data = $query->fetch();

        return true;*/

    }
    catch (PDOException $e){
        echo ('<br><br><br><br>Erreur: ' .$e->getMessage());
    }
    


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
 