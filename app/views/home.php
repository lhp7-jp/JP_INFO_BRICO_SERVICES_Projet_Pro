<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/public/style/style.css" rel="stylesheet" />
  <title>JP INFO BRICO SERVICES</title>
</head>

<body>
  <div class="myMain" <!-- NavBar pour naviguer dans le site. -->
    <nav>
      <!-- code &x2630; pour le caractère = (menu pour mobile) -->
      <a id="buttonMobil">&#x2630;</a>
      <ul id="myMenu">
        <li><img src="/public/pictures/Logo JP INFO BRICO SERVICES.png" alt="Logo JP INFO BRICO SERVICES" class="myLogo" />
        <li></br>JP INFO BRICO SERVICES</li>
        <li><a href="#">Nos services</a></li>
        <li><a href="#">Tarifs</a></li>
        <li><a href="#">Galerie photos</a></li>
        <li><a href="#">Connexion</a></li>
        <li><a href="#">Avis clients</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <section>
      <!-- Ici nous mettons le contenu de la page -->
      <h1></h1>
      </br>
      <h2>Vous avez besoin d'un informaticien, un bricoleur ou un jardinier, Jean-Pierre est à votre service.</h2>
    </section>
    <section>
      <button class="myButton" onclick="window.location.href = 'homejp.php';">Besoin d'un service ? </button>
    </section>
</div>
    <script>
      var myMenuLink = document.getElementById("buttonMobil");
      myMenuLink.addEventListener("click, buttonMobil");

      function buttonMobil() {
        var myBlock = document.getElementById("myMenu");
        //bascule entre class "myDisplay" ou non pour le menu :
        myBlock.classList.toggle("myDisplay");
      }
    </script>
    <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
    <footer>
      <p>© 2022 JP INFO BRICO SERVICES - 8, rue de Pierrement - Hameau de Pierrement - 76390 Criquiers.</p>
    </footer>

</body>

</html>