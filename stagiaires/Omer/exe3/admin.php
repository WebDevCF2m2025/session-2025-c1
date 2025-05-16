<?php
session_start();
require_once "config.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 3 | admin</title>
</head>

<body>
    <nav>
        <a href="index.php">Accueil</a> | <a href="about.php"> A propos de nous</a> <a href="deconexion.php">
            Deconexion</a>
    </nav>
    <h1>Exemple 3 | admin</h1>
    <p>Vouliez vous vous connecter</p>

    <?php
    if (isset($erreur)) {
        ?>
        <h3 style="color: red"> <?= $erreur ?></h3>
        <?php
    }
    ?>

    <?php
    var_dump($_SESSION) ?>
</body>


</html>