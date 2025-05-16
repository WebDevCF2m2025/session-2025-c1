<?php
session_start();
require_once "config.php";

if (isset($_POST['login'], $_POST['pwd'])) {
    if ($login === $_POST['login'] && $pwd === $_POST['pwd']) {
        header("Location: admin.php");
        $_SESSION = $_POST;
        $_SESSION['monid'] = session_id();

    } else {
        $erreur = "not good!";
        $_SESSION = $_POST;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 3 | Connexion</title>
</head>

<body>
    <nav>
        <a href="index.php">Accueil</a> | <a href="about.php"> A propos de nous</a>
    </nav>
    <h1>Exemple 3 | Connexion</h1>
    <p>Vouliez vous vous connecter</p>

    <?php
    if (isset($erreur)) {
        ?>
        <h3 style="color: red"> <?= $erreur ?></h3>
        <?php
    }
    ?>
    <form action="" method="post" name="connexion">
        <input type="text" name="login" placeholder="Votre pseudo"><br>
        <input type="password" name="pwd" placeholder="Votre password">
        <br>
        <button type="submit">Se connecter</button>
    </form>

    <?php
    var_dump($_SESSION) ?>
</body>


</html>