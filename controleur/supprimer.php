<?php
//connexion a la base de données
include_once 'connexionbdd.php';
include '../vue/modal.php';
//récupération de l'id dans le lien
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];

  if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    try {
      $query = "DELETE FROM users WHERE id = :id";
      $statement = $connexion->prepare($query);
      // bindValue on associe la valeur à la table de la bdd
      $statement->bindValue(':id', $id, PDO::PARAM_INT);
      $statement->execute();
      header('Location: ../vue/userliste.php');
      exit();
    } catch (PDOException $e) {
      echo "Erreur : " . $e->getMessage();
      header('Location: ../vue/userliste.php');
      exit();
    }
  }
} else {
  header('Location: ../vue/userliste.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
</body>
</html>