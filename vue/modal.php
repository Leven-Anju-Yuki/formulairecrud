<?php
include_once("../controleur/connexionbdd.php");
// include_once("supprimer.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];
} 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Confirmation de suppression</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="supp">
  <div class="confirmation-container">
    <p>Voulez-vous vraiment supprimer cet élément ? </br>Cette action est irréversible.</p>
    <a href="../controleur/supprimer.php?id=<?= $id ?>&confirm=yes" class="btn btn-danger">Supprimer</a>
    <a href="userliste.php" class="btn btn-secondary">Annuler</a>
  </div>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal">
   <img src="./images/trash.png" alt="">
  </div>
  <!- partie popup ->
  <div class="portfolio-modal modal fade " id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModal" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
      <div class="modal-content popup ">
        <div class="modal-header border-0">
          <button class="btn-close bouton" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center pb-5">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!- Portfolio Modal - Title->
                <!- Icon Divider->
                <section>

                  <article>
                    <p>etes vous réelement sur de vouloir supprimer cette utilisateur</p>
                  </article>
                  <button type="submit" name="confirmation">oui</button> <button data-bs-dismiss="modal">non</button><br><br>
                </section>
                <button class="bouton" data-bs-dismiss="modal">
                  Fermer la fenêtre
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->