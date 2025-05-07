<?php
// lancement de la session
session_start();

// si c'est notre première visite
// la variable $_SESSION['arrivee'] n'existe pas
if(!isset($_SESSION['arrivee'])) {
    // on la crée
    $_SESSION['arrivee'] = time(); // temps UNIX en secondes depuis le 01/01/1970
    // on crée un compteur
    $_SESSION['compte'] = 1;
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_SESSION</title>
</head>
<body>
<h1>$_SESSION</h1>
<p>Cette variable est une variable globale qui existe tant qu'on a lancé une session avec session_start()</p>
<p>C'est un tableau vide par défaut :</p>
<h2>var_dump($_SESSION);</h2>
<?php
var_dump($_SESSION);
?>
<h3>Temps et nombre de clics</h3>
<p>Nous sommes sur la page depuis <?php
    echo "Maintenant ".time()." - Arrivée ".$_SESSION['arrivee']."<br>";
    echo time()-$_SESSION['arrivee']." secondes <br> et nous avons cliqué : ";
 echo $_SESSION['compte']++;
?></p>

</body>
</html>