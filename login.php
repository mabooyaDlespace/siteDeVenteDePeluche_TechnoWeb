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
                $("#myheader").load("header.html");
                $("#myfooter").load("footer.html");
            });
        </script>
    </head>
    <body>
        <div id="myheader" ></div> 

        <form action="send_pseudo_and_password" method="post">
            <label class="pseudoEtMDP"   for="le_pseudonyme">Nom d'utilisateur</label><br>
            <input type="text" placeholder="ex:rObert78" name="le_pseudonyme" id="le_pseudonyme"><br>
            <label class="pseudoEtMDP" for="le_mot_de_passe">Mot de passe</label><br>
            <input  type="password" placeholder="Mot de passe"name="le_mot_de_passe" id="le_mot_de_passe"><br>
            <input class="pseudoEtMDP" type="submit" value="Se connecter">
            <!--<input type="submit" value="S'inscrire">-->
        </form>

        <div id="myfooter"></div>
    </body>

</html>