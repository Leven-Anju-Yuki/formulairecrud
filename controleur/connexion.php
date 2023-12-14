<?php
include_once "connexionbdd.php"; //once inclut une seul fois par page
//Ajouter un utilisateur
if (isset($_POST["button"])) {
    try {
        $email = $_POST['email'];
        $password = $_POST['password'];
        // recupere l'utilisateur depuis la base de donées en fonction de l'email
        $query = "SELECT* FROM users WHERE email= :email";
        $statement = $connexion->prepare($query);
        $statement->execute(array(":email" => $email));
        // execution de la requete
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            //verifier le mdp
            if (password_verify($password, $user["password"])) {
                // authentification reussie demarre la session redirige 
                session_start();
                $_SESSION["user_id"] = $user["id"];
                //stocker le prenom dans la session
                $_SESSION["firstname"] = $user["firstname"];
                //stocker le nom dans la session
                $_SESSION["lastname"] = $user["lastname"];
                //stocker le role dans la session
                $_SESSION["user_role"] = $user["role"];
                $_SESSION['auth_token'] = $user['token'];
                //generer un token aleatoire
                //generation d'un token aléatoire de 32 octets
                $token = bin2hex(random_bytes(32));
                //enregistrer le token dans un cookie (valide pdt 1h)
                //'/'signifie que le cookies est valide pour tt le domaine
                setcookie('auth_token', $token, time() + 3600, '/');
                //condition si le role est admin
                if ($user["role"] === "admin") {
                    header("Location: ../vue/admin.php");
                    exit;
                } else {
                    // stocker l'idetifiant de l'utilisateur dans la session
                    header("Location: ../vue/bonjour.php");
                    exit;
                }
            } else {
                echo "mot de passe incorrect";
            }
        } else {
            echo "Utilisateur non trouvé";
        }
    } catch (PDOException $e) {
        echo "erreur : " . $e->getMessage();
    }
}
