

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
            <label class="saisieTexte"   for="username">User</label><br>
            <input type="text" placeholder="<?php echo $username; ?>"  name="prenom" id="prenom"><br>
            <label class="saisieTexte" for="password">Prenom</label><br>
            <input  type="text" placeholder="<?php echo $name; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte"   for="username">Mot de passe</label><br>
            <input type="text" placeholder="<?php echo $password; ?>"  name="password" id="password"><br>
            <label class="saisieTexte" for="password">Adresse Email</label><br>
            <input  type="text" placeholder="<?php echo $email; ?>" name="email" id="email"><br>
            <label class="saisieTexte" for="password">Telephone</label><br>
            <input  type="text" placeholder="<?php echo $phoneNumber; ?>" name="phoneNumber" id="phoneNumber"><br>
            <label class="saisieTexte" for="password">Domicile</label><br>
            <input  type="text" placeholder="<?php echo $physicalAddress; ?>" name="address" id="address"><br>

            <!--<input class="pseudoEtMDP" type="submit" value="Se connecter" name="connexion">-->

            <input class="monBouton" type="submit" onclick='modif()' value="Valider Modification" name="validation">
 
        </form>

        
        <div id = "div_donnees"></div>

        


        <?php echo $username; ?>


        <div id="msglogin"><?php echo $msgErreurConnexion ?></div>
        <div id="msglogin"><?php echo $msgErreurInscription ?></div>

       <div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>

       

        </script>

    </body>





</html>



