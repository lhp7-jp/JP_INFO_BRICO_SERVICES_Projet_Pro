<?php
session_start();

$page = 'services';

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

	<?php include './templates/navbar.php' ?>

	<div class="container-fluid mt-5">
		<h1 class="m-5 text-center">Jardinage</h1>
		<div class="row justify-content-center">
			<a href="lawn_cut_form.php" class="m-3 p-4 col-lg-2 col-4 border border-dark border-5 rounded text-decoration-none">
				<img src="../public/pictures/icons/tonte.png" class="img-fluid" alt="Tonte">
				<p class="mt-4 service-title text-center text-dark">Tonte</p>
			</a>
			<a href="trees_cut_form.php" class="m-3 p-4 col-lg-2 col-4 border border-dark border-5 rounded text-decoration-none">
				<img src="../public/pictures/icons/taillage.png" class="img-fluid" alt="Taillage">
				<p class="mt-4 service-title text-center text-dark">Taillage</p>
			</a>
		</div>

		<div class="row justify-content-center">
			<!-- bouton avec JS pour revenir en arrière -->
			<button class="col-3 btn btn-dark text-center mt-4" onclick="history.back()">Retour</button>
		</div>

	</div>
	<?php include './templates/footer.php' ?>
</body>

</html>