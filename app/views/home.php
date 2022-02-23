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
  <?php include 'header.php'; ?>
  <main class="site-content">
    <!-- Ici nous mettons le contenu de la page -->
    <div>
      <h1></h1></br>
    </div>
    <div>
      <h1>Vous avez besoin d'un informaticien,
        un bricoleur ou un jardinier, Jean-Pierre est à votre service.</h1></br>
    </div>
    <div>
       <button class="myButton" onclick="window.location.href = '/app/views/nos_services.php';">Besoin d'un service ? </button></br>
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
  <?php include 'footer.php'; ?>
</body>

</html>