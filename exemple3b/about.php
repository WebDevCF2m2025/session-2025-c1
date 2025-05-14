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
    <title>Exemple 3 | À propos nous</title>
</head>
<body>
    <nav>
        <a href="./">Accueil</a> | À propos de nous |
        <?php if(isset($_SESSION['monid'])&&$_SESSION['monid']===session_id()):
            ?>
            <a href="disconnect.php">Déconnexion</a>
        <?php
        else:
            ?>
            <a href="connect.php">Connexion</a>
        <?php
        endif;
        ?>
    </nav>
<h1>Exemple 3 | À propos nous</h1>
<p>Nous sommes une classe de joyeux lurons en slip</p>
    <?php
    var_dump($_SESSION);
    echo session_id();
    ?>
</body>
</html>