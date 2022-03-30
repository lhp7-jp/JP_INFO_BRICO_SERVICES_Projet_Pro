<?php

$page = 'prices';

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

	<div class=" mt-5"></div>

	<h1 class="text-center mt-5">Tarifs de mes services</h1>

	<div class="container-fluid">
		<div class="row mt-lg-5 mt-3 justify-content-center p-0">
			<div class="col-lg-4 col-10">
				<img src="../public/pictures/tarifs.jpg" alt="Outils" class="img-fluid">
			</div>
			<div class="col-lg-5 col-10 p-4">
				<p class="fs-4 text-lg-start text-center">30 euros TTC l'heure, frais de déplacement inclus.</p>
				<ul>
					<li>0 à 1 heure : <b>30 euros</b> TTC</li>
					<li>½ journée (4 heures) : <b>110 euros</b> TTC</li>
					<li>1 journée (8 heures) : <b>200 euros</b> TTC</li>
					<li>1 semaine (40 heures) : <b>950 euros</b> TTC</li>
					<li>1 mois ( 20 jours) : <b>3600 euros</b> TTC</li>
				</ul>
				<p class="fs-4 text-lg-start text-center">Devis forfaire ou individualisé gratuit sur simple demande.</p>
			</div>
		</div>
		<div class="row justify-content-center p-0">
			<a href="nos_services.php" class="btn btn-dark col-lg-3 col-8 m-lg-5 m-4 p-3 fs-3 rounded-pill">Devis</a>
		</div>
	</div>

	<?php include 'templates/footer.php' ?>
</body>

</html>