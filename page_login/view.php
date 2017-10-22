

<!DOCTYPE html>
<html>
    <head>
        <!-- Thibaud Taquet, Jean-Charles Simonnet et Vianney Tondeux -->
        <title>Authentification</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
        
    </head>
    <body>
        <div id="myheader" >
<?php
require( "../includes/header.php");
?>
        </div>

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

       <div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>
    </body>

</html>