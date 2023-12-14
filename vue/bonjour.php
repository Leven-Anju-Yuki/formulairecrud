<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: ./index.php");
    exit;
}
if (!isset($_COOKIE["auth_token"])) {
    session_destroy();
    header("Location: visuconnexion.php");
    exit;
}
if ($_SESSION["user_role"] === 'admin') {
    header('Location: admin.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../images/az vinqueur.jpg" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Bonjour</title>
</head>

<body class="bonjour">
    <nav>
        <ul>
            <?php if (!isset($_SESSION["user_id"])) : ?>
                <center>
                    <button class="boutton"> <a href="visuconnexion.php"><img src="https://res.cloudinary.com/dgrszi9wf/image/upload/v1701424270/coins/connexion.png" alt=""></a></button>
                    <button class="boutton"><a href="visuinscription.php"><img src="https://res.cloudinary.com/dgrszi9wf/image/upload/v1701424270/coins/inscription.png" alt=""></a></button <?php endif; ?> <?php if (isset($_SESSION["user_id"])) : ?> <button style="padding:10px" class="boutton"><a href="../controleur/deconnexion.php"><img src="../images/deconnexion.png" alt="deconnexion"></a></button>
                <?php endif; ?>
                </center>
        </ul>
    </nav>
    <center>
        <h2>bonjour
            <?php if (isset($_SESSION["user_id"])) {
                echo ' ' . $_SESSION["firstname"] . " " . $_SESSION["lastname"];
            }
            ?>.
            <br> Bienvenue sur ta page
        </h2>
    </center>

    <footer>
        <center><img src="../images/az dans les feuilles.jpg" alt="az dans les feuilles"></center>
    </footer>

</body>

</html>