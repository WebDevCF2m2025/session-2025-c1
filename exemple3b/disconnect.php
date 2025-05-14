<?php
session_start();

// suppression des variables de session
// côté serveur
// $_SESSION = []
session_unset();

# suppression du cookie côté utilisateur
# suppression de l'id contenu dans ce cookie
if (ini_get("session.use_cookies")) {
    // on récupère dans php.ini les réglages de session
    $params = session_get_cookie_params();
    // création d'un nouveau cookie pour réécrire l'ancien
    // en le mettant dans le passé pour forcer
    // le navigateur à supprimer le cookie
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// suppression réelle de la session
// (effacement du fichier texte côté serveur)
session_destroy();

// redirection
header("Location: ./");