<?php
session_start();
// verifie si l'utilisiteur est connecter avant de le deconnecter
if (isset($_SESSION["user_id"])) {
    // supprimer toutes les variables de la session
    $_SESSION = array();
    // detruire la session
    session_destroy();
    // Redirigez l'utilisateur vers une pages de deconnexion
    header("location: ../index.php");
    exit;
} else {
    header("location: ../index.php");
}

