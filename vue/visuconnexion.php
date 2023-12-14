<?php
include_once "../controleur/connexionbdd.php"; //once inclut une seul fois par page
include "../controleur/connexion.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../images/az vinqueur.jpg" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Connexion</title>
</head>

<body class="inscription">

    <div class="form">
        <a href="../index.php" class="back_btn"><img src="../images/back.png"> Retour</a>
        <h2>Vous connecter</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Email</label>
            <input type="email" name="email">
            <label>Mot de passe</label>
            <input type="password" name="password">
            <input type="submit" value="Connexion" name="button">
        </form>
        <p>vous n'êtes pas encore inscrit <a href="../vue/visuinscription.php">inscrivez-vous</a></p>
    </div>
    </div>

</body>

</html>