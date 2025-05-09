<?php
//lancement de la session
session_start();
//si c'est notre premiére visite
//la variable $_SESSION['arrivee'] n'existe pas 
if (!isset($_SESSION['arrivee'])) {
    // on la crée
    $_SESSION['arrivee'] = time(); // temps UNIX en secondes depuis le 01/01/1970

    // on crée un compteur

    $_SESSION['compte'] = 1;
}
    $pluriel = time() - $_SESSION['arrivee'] > 0 ? "s" : ""; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SESSION</title>
</head>

<body>
    <h1>$_SESSION</h1>
    <p>Cette variable est une variable globale qui existe tant qu'on a lancé une session avec sessions avec session-start()</p>
    <p>c'est un tableau vide par default :</p>
 <?php
    var_dump($_SESSION);
    ?>


    <h3>Tempte et nombre de clics</h3>
   <p>
    Nous sommes sur la page depuis :<br>
    - Heure actuelle : <?= time(); ?><br>
    - Heure d'arrivée : <?= $_SESSION['arrivee']; ?><br>
    - Temps écoulé : <?= time() - $_SESSION['arrivee']; ?> seconde<?= $pluriel; ?><br>
    - Nombre de visites (rafraîchissements) : <?= $_SESSION['compte']++; ?>
</p>


</body>

</html>