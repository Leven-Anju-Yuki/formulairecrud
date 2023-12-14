<?php
include "connexionbdd.php";
// include "../vue/visuinscription.php";
//Ajouter un utilisateur
if (isset($_POST["button"])) {
    try {
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // hacher le mot de passe 
        // Vérification si l'e-mail est déjà utilisé
        $query = "SELECT COUNT(*) FROM users WHERE email = :email";
        $statement = $connexion->prepare($query);
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        $count = $statement->fetchColumn();

        if ($count > 0) {
            echo "Cet e-mail est déjà utilisé. Veuillez en choisir un autre.";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            // preparation de la requete
            $query = "INSERT INTO users(lastname, firstname, email, password) 
        VALUES (:lastname,:firstname,:email,:password)";
            $statement = $connexion->prepare($query);
            // execution de la requete
            $statement->execute(
                array(
                    ':lastname' => $lastname,
                    ':firstname' => $firstname,
                    ':email' => $email,
                    ':password' => $password
                )
            );
            header("Location: ../vue/visuconnexion.php");
            echo "utilisateur ajouter avec succes";
        }
    } catch (PDOException $e) {
        echo "erreur : " . $e->getMessage();
    }
}
