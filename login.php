<?php 
    include('database.php');
    include('user.php');
    include('session.php');
    
    $msgErreurConnexion = "";
    $msgErreurInscription = "";

    if (!empty($_POST['connexion'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username && !empty($password))){
            $connexion = connexion($username, $password);
            if ($connexion){
                header("Location: home.php");
            }
            else{
                $msgErreurConnexion = "Nom d'utilisateur ou mot de passe erroné.";
            }
        }
        else{
            $msgErreurConnexion = "Veuillez remplir les champs requis.";
        }
    }

    if (!empty($_POST['inscription'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username && !empty($password))){
            $inscription = inscription($username, $password);
            if ($inscription){
                header("Location: home.php");
            }
            else{
                $msgErreurInscription = "Ce nom d'utilisateur est déjà utilisé.";
            }
        }
        else{
            $msgErreurInscription = "Veuillez remplir les champs requis.";
        }
    }
 ?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Thibaud Taquet, Jean-Charles Simonnet et Vianney Tondeux -->
        <title>Authentification</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(function () {
                $("#myheader").load("header.php");
                $("#myfooter").load("footer.html");
            });
        </script>
    </head>
    <body>
        <div id="myheader" ></div>

        <form method="post">
            <label class="pseudoEtMDP"   for="username">Nom d'utilisateur</label><br>
            <input type="text" placeholder="ex:rObert78" name="username" id="username"><br>
            <label class="pseudoEtMDP" for="password">Mot de passe</label><br>
            <input  type="password" placeholder="Mot de passe" name="password" id="password"><br>
            <input class="pseudoEtMDP" type="submit" value="Se connecter" name="connexion">
            <input class="pseudoEtMDP" type="submit" value="S'inscrire" name="inscription">
        </form>

        <div id="msg"><?php echo $msgErreurConnexion ?></div>
        <div id="msg"><?php echo $msgErreurInscription ?></div>

        <div id="myfooter"></div>
    </body>

</html>