<?php
include_once '../controleur/connexionbdd.php';
include_once '../controleur/listeback.php';
session_start();
if (!isset($_COOKIE['auth_token'])) {
    $_SESSION = array();
    session_destroy();
    header('Location:index.php');
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Authentification</title>
    <link rel="shortcut icon" type="image/png" href="../images/az vinqueur.jpg" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="liste">
    <div class="container">
        <a href="visuinscription.php" class="Btn_add"> <img src="../images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Rôle</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?php echo $user['lastname'] ?></td>
                    <td><?php echo $user['firstname'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><?php echo $user['role'] ?></td>
                    <td><a href="modif.php?id=<?php echo $user['id'] ?>"><img src="../images/pen.png"></a></td>
                    <td><a href="../vue/modal.php?id=<?php echo $user['id'] ?>"><img src="../images/trash.png"></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>