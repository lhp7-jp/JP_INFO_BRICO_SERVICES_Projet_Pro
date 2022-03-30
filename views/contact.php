<?php

$page = 'contact';

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

	<div class="container-fluid my-5">

		<h1 class="m-5 text-center">Contactez-nous</h1>

		<div class="row justify-content-center m-0">
			<div class="col-lg-4 text-center">
				<iframe class="map-iframe" src="https://web-1083.webnode.com/widgets/googlemaps/?z=15&amp;a=8%2C+rue+de+Pierrement%2C+76390+Criquiers&amp;s=">
				</iframe>
			</div>
			<div class="col-lg-4 p-lg-3 pt-3 text-center">
				<div><i class="bi bi-geo-alt-fill fs-3"></i></div>
				<p class="fs-5"><b>JP INFO BRICO SERVICES</b><br>
					8, rue de Pierrement - Hameau de Pierrement, 76390 Criquiers</p>
				<div><i class="bi bi-telephone-fill fs-3"></i></div>
				<p class="fs-5">06 81 33 xx xx</p>
				<div><i class="bi bi-envelope-fill fs-3"></i></div>
				<p class="fs-5">jpinfobricoservices@gmail.com</p>
			</div>
		</div>
	</div>

	<?php include 'templates/footer.php' ?>

</body>

</html>