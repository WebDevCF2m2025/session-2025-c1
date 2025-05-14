<?php
// création de l'id de session
    // SI elle n'existe pas encore
    // sinon elle continue la session en cours
// du cookie (contient que l'id de session)
// et du fichier temporaire côté serveur (contient les données de session)
session_start();

// si on est déjà connecté
if(isset($_SESSION['monid'])&&$_SESSION['monid']===session_id()){
    // impossible de rester sur cette page
    header("Location: ./");
    exit();
}

// chargement des variables de connexion
require_once "config.php";

// si on a envoyé le formulaire
if(isset($_POST['login'],$_POST['pwd'])) {
    // vérification des entrées
    if($login===$_POST['login']&&$pwd===$_POST['pwd']){

        // on recrée un id dans le cookie
        // et on supprime l'ancien fichier server (true)
        // mode parano !
        session_regenerate_id(true);

        // si valide, on prend tous les champs de
        // $_POST (ce qui efface les variables qui
        // auraient existé avant)
        $_SESSION = $_POST;
        $_SESSION['monid'] = session_id();
        // pwd étant dangereux, on va l'effacer de la session
        unset($_SESSION['pwd']);

        // redirection vers l'admin
        header("Location: admin.php");
        exit();
    }else{
        $error = "Login et/ou mot de passe incorrecte";
    }
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemple 3 | Connexion</title>
</head>
<body>
    <nav>
        <a href="./">Accueil</a> | <a href="about.php">À propos de nous</a> | Connexion
    </nav>
<h1>Exemple 3 | Connexion</h1>
<p>Veuillez vous connecter</p>
    <?php
    if(isset($error)):
    ?>
    <h3 style="color: red"><?=$error?></h3>
    <?php
    endif;
    ?>
<form action="" method="post" name="connexion">
    <input type="text" name="login" placeholder="Votre pseudo"><br>
    <input type="password" name="pwd" placeholder="Votre mot de passe"><br>
    <input type="submit" value="Se connecter">
    <pre>
        Login : root
        Password : 123
    </pre>
</form>
    <?php
    var_dump($_SESSION);
    echo session_id();
    ?>
</body>
</html>