<?php
  //connexion à la base de données
  $host = 'localhost'; //nom du serveur
  $username = 'root';//nom d'utilisateur
  $password = '';//mot de passe
  $dbname = 'crud_users';//nom de la base de données
  try {
    // Connexion avec PDO
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}