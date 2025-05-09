<?php
//lancement de la session
session_start();

// si c'est notre première visite
if(!isset($_SESSION['arrivee'])){
    // on la crée 
    $_SESSION['arrivee']= time();  // temps UNIX en secondes depuis le 01/01/1970
    $_SESSION['compte'] = 1;
}

    $pluriel = $_SESSION['compte'] > 1 ? "s" : "";
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
    <p>Cette variable est une variable globale sui existe tant qu'on a lancé une session avec session_start()</p>
    <p>C'est un tableau vide par défaut :</p>
   
    <?php 
    var_dump($_SESSION);
    ?>
    <h2>var_dump($_SESSION)</h2>
    <?php 
    var_dump($_POST);
    ?>
    <!-- <h3>Temps et nombre de clics</h3>
    <p>nous sommes sur la page depuis <?php 
   // echo "maintenant".time()."arrivée".$_SESSION['arrivee']."<br>";
   // echo time()-$_SESSION['arrivee']. " secondes <br> et nous avons cliqué :  " ;
   // echo $_SESSION['compte']++;
    ?></p>
 -->

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
