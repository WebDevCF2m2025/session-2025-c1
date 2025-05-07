<?php
# Lancement d'une session
# Création d'un identifiant de session (PHPSESSID)
# stocké dans un fichier texte sur le serveur
# et dans un cookie sur la machine utilisateur
# contenant le phpsessid
session_start();



var_dump($_SESSION);

echo session_id();
