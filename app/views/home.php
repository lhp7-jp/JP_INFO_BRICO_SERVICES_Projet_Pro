<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="/public/style/style.css" rel="stylesheet" /> -->
  <link href="/public/style/style_responsive.css" rel="stylesheet" />

  <title>JP INFO BRICO SERVICES</title>
</head>

<body>
  <header class="site-header">
  <div class="myNav" <!-- NavBar pour naviguer dans le site. -->
    <nav>
      <ul id="myMenu">
        <li><img src="/public/pictures/Logo JP INFO BRICO SERVICES.png" alt="Logo JP INFO BRICO SERVICES" class="myLogo" />
        <li></br>JP INFO BRICO SERVICES</li>
        <li></br><a href="/app/views/nos_services">Nos services</a></li>
        <li></br><a href="/app/views/tarifs/">Tarifs</a></li>
        <li></br><a href="/app/views/galerie_photos/">Galerie photos</a></li>
        <li></br><a href="/app/views/connexion/">Connexion</a></li>
        <li></br><a href="/app/views/avis_clients/">Avis clients</a></li>
        <li></br><a href="/app/views/contact/">Contact</a></li>
      </ul>
    </nav>
  </div>
  </header>
  <main class="site-content">
    <!-- Ici nous mettons le contenu de la page -->
    <div>
      <h1></h1></br>
    </div>
    <div>
       <h2>Vous avez besoin d'un informaticien,
        un bricoleur ou un jardinier, Jean-Pierre est à votre service.</h2></br>
    </div>
   <div class="myService">
    <h1></h1></br>
    <button class="myButton" onclick="window.location.href = '/app/views/nos_services/';">Besoin d'un service ? </button></br>
  </div>
  </main>
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
  <footer class="myFooter">
  </br><p>© 2022 JP INFO BRICO SERVICES - 8, rue de Pierrement - Hameau de Pierrement - 76390 Criquiers.</p>
  </footer>

</body>

</html>