<nav class="fs-5 navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img class="img-fluid logo mx-3" src="../public/pictures/Logo JP INFO BRICO SERVICES.png" alt="Logo JP INFO BRICO SERVICES">JP INFO BRICO SERVICES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item mx-4">
          <a class="nav-link <?= $page == 'home' ? ' active' : '' ?>" href="home.php">Accueil</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link <?= $page == 'services' ? ' active' : '' ?>" href="nos_services.php">Services</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link <?= $page == 'prices' ? ' active' : '' ?>" href="tarifs.php">Tarifs</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link <?= $page == 'gallery' ? ' active' : '' ?>" href="galerie_photos.php">Réalisations</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link <?= $page == 'feedbacks' ? ' active' : '' ?>" href="avis_clients.php">Avis clients</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link <?= $page == 'contact' ? ' active' : '' ?>" href="contact.php">Contact</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link <?= $page == 'login' ? ' active' : '' ?>" href="login.php"><?= $_SESSION['admin'] ?? 'Connexion' ?></a>
        </li>
      </ul>

    </div>
  </div>
</nav>