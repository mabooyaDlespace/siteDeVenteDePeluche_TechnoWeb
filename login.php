<?php 
    session_start();
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
        <?php

        function connexion(){
            $user = $_POST['username'];
            $pw = $_POST['password'];

            if (empty($_POST['username']) OR empty($_POST['password'])){
                echo('<p style="position: absolute; top: 100px;">Veuillez remplir les champs requis</p>');
            }
            else {
                $bdd = new PDO('mysql:host=localhost; dbname=test_site', 'root', '');
                $reponse = $bdd->query('SELECT * FROM users WHERE (username=\''.$user.'\' AND password=\''.$pw.'\') ');
                $donnees = $reponse->fetch();
                if ($donnees['password'] != $pw){
                    
                    echo('<p style="position: absolute; top: 100px;">Nom d\'utilisateur ou mot de passe erroné, veuillez réessayer</p>');
                    
                }
                else {
                    $succes = "Bienvenue " .$donnees['username'];
                    echo('<p style="position: absolute; top: 100px;">'.$succes.'</p>');
                    $_SESSION['user'] = $user;
                }

                $reponse->closeCursor();
            }

            
        }

        function inscription(){
            $user = $_POST['username'];
            $pw = $_POST['password'];

            $bdd = new PDO('mysql:host=localhost; dbname=test_site', 'root', '');
            $bdd->exec('INSERT INTO users(username, password) VALUES(\''.$user.'\', \''.$pw.'\')');

            echo('<p style="position: absolute; top: 100px;">Vous êtes maintenant inscrit</p>');
        }

        if (isset($_POST['connexion'])){
            connexion();
        }

        if (isset($_POST['inscription'])){
            inscription();
        }
        
    ?>
        <div id="myheader" ></div> 

        <form action="login.php" method="post">
            <label class="pseudoEtMDP"   for="username">Nom d'utilisateur</label><br>
            <input type="text" placeholder="ex:rObert78" name="username" id="username"><br>
            <label class="pseudoEtMDP" for="password">Mot de passe</label><br>
            <input  type="password" placeholder="Mot de passe" name="password" id="password"><br>
            <input class="pseudoEtMDP" type="submit" value="Se connecter" name="connexion">
            <input class="pseudoEtMDP" type="submit" value="S'inscrire" name="inscription">
        </form>

        <div id="myfooter"></div>
    </body>

</html>