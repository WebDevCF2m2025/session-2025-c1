<?php
session_start();

// suppression des variables de session
// côté serveur
// $_SESSION = []
session_unset();

# suppression du cookie côté utilisateur
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
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