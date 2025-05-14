<?php
session_start();
require_once('config.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 3 | A propos</title>
</head>

<body>
    <nav>
        <a href="index.php">Accueil</a> | <?php if (isset($_SESSION['monid']) && $_SESSION['monid'] === session_id()):
            ?>
            <a href="admin.php">Admin</a>

            <a href="deconexion.php">Déconnexion</a>
            <?php
        else:
            ?>
            <a href="connexion.php">Connexion</a>
            <?php
        endif;
        ?>
    </nav>
    <h1>Exemple 3 | A propos</h1>
    <?php
    if (isset($_SESSION['login'])) {
        ?>
        <p>hello <?= $login ?></p>

    <?php }
    ?>
</body>


</html>