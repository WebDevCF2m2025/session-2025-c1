<?php
// création ou continuation d'une session existante
// Crée un cookie nommé PHPSESSID par défaut sur le navigateur
// Crée un fichier texte sur le serveur
session_start();


// affichage du contenu de la session
// n'existe qu'après un session_start() !
var_dump($_SESSION);

// pour afficher l'id de session :
echo session_id();