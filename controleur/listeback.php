<?php
include_once 'connexion.php';
include_once '../vue/userliste.php';

//Récupérer les utilisateurs
try {
    $query = "SELECT * FROM users";
    $statement = $connexion->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur " . $e->getMessage();
}

if (!isset($_COOKIE['auth_token'])) {
    $_SESSION = array();
    session_destroy();
    header('Location:index.php');
}

?>