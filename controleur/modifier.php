<?php
include_once 'connexionbdd.php';


// Affchage des données de l'utilisateur dans les champs
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        // where id = le champ id de la table de la bdd, :id = c'est la valeur de l'id
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $connexion->prepare($query);
        // bindValue on associe la valeur à la table de la bdd
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        // var_dump($user);
    } catch (PDOException $e) {
        header('Location: ../index.php');
        echo "Erreur : " . $e->getMessage();
    }
}

?>
<?php
// Mis à jour des données de l'utilisateur
include_once '../vue/modif.php';
if (isset($_POST['button'])) {
    try {
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE users SET lastname = '$lastname', firstname = '$firstname', email = '$email',password = '$password' WHERE id = '$id'";
        $connexion->exec($query);
        header('Location: ../index.php');
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Veuillez remplir tous les champs";
}
?>