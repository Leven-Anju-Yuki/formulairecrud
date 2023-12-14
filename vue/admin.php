<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: ../index.php");
    exit;
}
if (!isset($_COOKIE["auth_token"])) {
    session_destroy();
    header("Location: visuconnexion.php");
    exit;
}
// if ($_SESSION["user_id"] != "admin") {
//     header("Location: ../index.php");
//     exit;
// } 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../images/az vinqueur.jpg" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body class="admin">
    <nav>
        <ul>
            <a href="../vue/userliste.php" class="boutton">voir les utilisateurs</a><br>
            <button style="padding:10px" class="boutton"><a href="../controleur/deconnexion.php"><img src="../images/deconnexion.png" alt="deconnexion"></a></button>

        </ul>
    </nav><br>
    <center>
        <h2>vous êtes le meilleur admin</h2>
    </center>
    <!-- <center>
        <h2>bonjour
          < ?php// if (isset($_SESSION["user_id"])) {
//echo ' ' . $_SESSION["firstname"] . " " . $_SESSION["lastname"];
          //  }
            ?>.
            <br> Bienvenue sur ta page
        </h2>
    </center> -->
    <footer>
        <center><img src="../images/az dans les feuilles.jpg" alt="az dans les feuilles"></center>
    </footer>
</body>

</html>