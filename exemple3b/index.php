<?php
// création de l'id de session
    // SI elle n'existe pas encore
    // sinon elle continue la session en cours
// du cookie (contient que l'id de session)
// et du fichier temporaire côté serveur (contient les données de session)
session_start();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemple 3 | Accueil</title>
</head>
<body>
    <nav>
        Accueil | <a href="about.php">À propos de nous</a> |
        <?php if(isset($_SESSION['monid'])&&$_SESSION['monid']===session_id()):
        ?>
            <a href="admin.php">Administration</a>
            <a href="disconnect.php">Déconnexion</a>
        <?php
        else:
        ?>
            <a href="connect.php">Connexion</a>
        <?php
        endif;
        ?>
    </nav>
<h1>Exemple 3 | Accueil</h1>
    <?php
    if(isset($_SESSION['login'])):
        ?>
        <p>Vous êtes connecté en tant que <?=$_SESSION['login']?></p>
    <?php
    endif;
    ?>
<p>Du blabla de la page d'accueil</p>
    <?php
    var_dump($_SESSION);
    echo session_id();
    ?>
</body>
</html>