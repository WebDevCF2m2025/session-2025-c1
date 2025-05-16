<?php
session_start();
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 3 | Accuil</title>
</head>

<body>
    <nav>
        <a href="about.php"> A propos de nous</a> | <?php if (isset($_SESSION['monid']) && $_SESSION['monid'] === session_id()):
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
        <?php
        if (isset($_SESSION['login'])) {
            ?>
            <p>hello <?= $login ?></p>

        <?php }
        ?>
        <?php
        if (isset($_POST['login'], $_POST['pwd'])) {
            if ($login === $_POST['login'] && $pwd === $_POST['pwd']) {
                ?> <a href="deconexion.php"><?php
            }
        }
        ?>
    </nav>
    <h1>Exemple 3 | Accueil</h1>
</body>


</html>