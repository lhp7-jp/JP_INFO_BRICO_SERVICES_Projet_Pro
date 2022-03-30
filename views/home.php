<?php
session_start();

$page = 'home';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Cdn Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/style/style.css">
  <title>JP INFO BRICO SERVICES</title>
</head>

<body class="bg-warning d-flex flex-column min-vh-100">

  <?php include 'templates/navbar.php' ?>

  <div class="container-fluid p-0 myCarousel mb-5 mt-5">
    <div id="carouselExampleControls" class="carousel slide carousel-fade " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../public/pictures/carousel/computer.jpg" class="d-block w-100" alt="Ordinateur hardware">
        </div>
        <div class="carousel-item">
          <img src="../public/pictures/carousel/garden.jpg" class="d-block w-100" alt="Jardin à becher">
        </div>
        <div class="carousel-item">
          <img src="../public/pictures/carousel/brico.jpg" class="d-block w-100" alt="Homme qui bricole">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container text-center">
    <p class="h1">Vous avez besoin d'un informaticien,
      un bricoleur ou un jardinier,<br><strong>JP INFO BRICO SERVICES</strong> est à votre service.</p>
  </div>
  <div class="row justify-content-center p-0 m-0">
    <a href="nos_services.php" class="btn btn-dark col-lg-4 col-8 m-5 p-3 fs-3 rounded-pill">Besoin d'un service ?</a>
  </div>

  <?php include 'templates/footer.php' ?>

</body>

</html>