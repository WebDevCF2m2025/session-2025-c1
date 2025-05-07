<?php
// création ou continuation d'une session existante
// Crée un coockie nommé PHPSESSID par default sur le navigateur
// Crée un fichier texte sur le serveur
session_start();



// affichage du contenu de la session
// N'existe qu'après un session_start() !
var_dump($_SESSION);


// Pour afficher l'ID de session :
echo session_id();