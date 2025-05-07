<?php
//création ou continuation d' une session existante
//crée un cookie nommé PHPSESSID par défaut dur le navigateur
//crée un fichier texte sur le serveur
session_start();


//affichage du contenu de la session
//n'existe qu'après un session_start()
var_dump($_SESSION);

//afficher l'id de session :
echo session_id();