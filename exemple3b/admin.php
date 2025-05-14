<?php
// création de l'id de session
    // SI elle n'existe pas encore
    // sinon elle continue la session en cours
// du cookie (contient que l'id de session)
// et du fichier temporaire côté serveur (contient les données de session)
session_start();

// si nous ne sommes pas connectés, ou plus valablement connecté
if(!isset($_SESSION['monid'])|| $_SESSION['monid'] !== session_id()) {
    // tentative d'attaque (ou time out ;-)
    header("Location: ./");
    exit();
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemple 3 | Administration</title>
</head>
<body>
    <nav>
        <a href="./">Accueil</a> | <a href="about.php">À propos de nous</a> | <a href="disconnect.php">Déconnexion</a>
    </nav>
<h1>Exemple 3 | Administration</h1>
<p>Mon administration protégée</p>
    <?php
    var_dump($_SESSION);
    echo session_id();
    ?>
</body>
</html>