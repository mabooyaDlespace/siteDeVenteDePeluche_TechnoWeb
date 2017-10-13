<?php 
    session_start();
 ?>

<!DOCTYPE html>
<!--
here
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="topnav">
            <img src="logo.png" id="logo" alt="This is the logo of our association" title="Homepage" >
            
            <a href="product.html">Produits</a>
            <a href="search.html"><img src="searchlogo.png" id="searchlogo">Recherche</a>
            <a href="login.php" id="login">Authentification</a>
            <a href="profile.php" id="profile"><?php if (isset($_SESSION['user'])){ echo $_SESSION['user'];} ?> </a>
        </div>
    </body>
</html>
