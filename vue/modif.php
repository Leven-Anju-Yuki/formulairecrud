<?php
include_once '../controleur/modifier.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="modif">
    <div class="form">
        <a href="userliste.php" class="back_btn"><img src="../images/back.png"> Retour</a>
        <h2>Modifier l'employé : </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="lastname" value="<?php echo $user['lastname'] ?>">
            <label>Prénom</label>
            <input type="text" name="firstname" value="<?php echo $user['firstname'] ?>">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $user['email'] ?>">
            <label>Mot de passe</label>
            <input type="password" name="password" value="<?php echo $user['password'] ?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>