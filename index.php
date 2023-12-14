<?php
session_start();
// if (!isset($_SESSION["user_id"])) {
//     header("Location: ../vue/visuconnexion.php");
//     exit;
// }
// if ($_SESSION["user_role"] !== 'user') {
//     header('Location: ../vue/admin.php');
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
    <link rel="stylesheet" href="./css/style.css">
    <title>Accueil</title>
</head>

<body class="accueil">
    <section>
        <nav>
            <ul>
                <center>
                    <button class="boutton"><a href="./vue/visuconnexion.php"><img src="https://res.cloudinary.com/dgrszi9wf/image/upload/v1701424270/coins/connexion.png" alt=""></a></button>
                    <button class="boutton"><a href="./vue/visuinscription.php"><img src="https://res.cloudinary.com/dgrszi9wf/image/upload/v1701424270/coins/inscription.png" alt=""></a></button>
                   
                </center>
            </ul>
        </nav>
    </section>
    <footer>
        <center><img src="./images/az dans les feuilles.jpg" alt="az dans les feuilles"></center>
    </footer>

</body>

</html>