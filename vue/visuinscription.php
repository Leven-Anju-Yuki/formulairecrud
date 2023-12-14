<?php
include_once "../controleur/connexionbdd.php";
include "../controleur/inscription.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../images/az vinqueur.jpg" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Inscription</title>
</head>

<body class="inscription">
    <div class="form">
        <a href="../index.php" class="back_btn"><img src="../images/back.png"> Retour</a>
        <h2>Vous inscrire</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="lastname">
            <label>Prénom</label>
            <input type="text" name="firstname">
            <label>Email</label>
            <input type="email" name="email">
            <label>Mot de passe</label>
            <input type="password" name="password">
            <input type="submit" value="Ajouter" name="button">
        </form>
        <p>vous êtes deja inscrit <a href="../vue/visuconnexion.php">connecter-vous</a></p>
    </div>
    <!-- <footer>
        <center><img src="../images/az dans les feuilles.jpg" alt="az dans les feuilles"></center>
    </footer>
 -->
</body>

</html>