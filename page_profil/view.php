

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
            <input type="text" placeholder="<?php echo $password; ?>"  name="prenom" id="prenom"><br>
            <label class="saisieTexte" for="password">Adresse Email</label><br>
            <input  type="text" placeholder="<?php echo $email; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte" for="password">Telephone</label><br>
            <input  type="text" placeholder="<?php echo $phoneNumber; ?>" name="nom" id="nom"><br>
            <label class="saisieTexte" for="password">Domicile</label><br>
            <input  type="text" placeholder="<?php echo $physicalAddress; ?>" name="nom" id="nom"><br>
            <input class="saisieTexte" type="submit" value="Submit" name="bouton">
 
        </form>
        <?php echo $username; ?>
<?php echo $lolol; ?>

        <div id="msglogin"><?php echo $msgErreurConnexion ?></div>
        <div id="msglogin"><?php echo $msgErreurInscription ?></div>

       <div id="myfooter"> <?php include_once '../includes/footer.html'; ?></div>
    </body>

</html>




