<nav class="fs-5 navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img class="img-fluid logo mx-3" src="../public/pictures/Logo JP INFO BRICO SERVICES.png" alt="Logo JP INFO BRICO SERVICES">JP INFO BRICO SERVICES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item mx-4">
          <a class="nav-link <?= $page == 'login' ? ' active' : '' ?>" href="deconnexion.php">Deconnexion</a>
        </li>
      </ul>

    </div>
  </div>
</nav>