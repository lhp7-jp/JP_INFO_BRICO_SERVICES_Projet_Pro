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
		<h1 class="m-5 text-center">EN CONSTRUCTION</h1>
		<div class="row text-center">
			<hr>
			<i class="bi bi-cone-striped display-1"></i>
			<p class="h2 my-4">En cours de développement
			<p>
				<i class="bi bi-git display-3"></i>
				<hr>
		</div>

		<div class="row justify-content-center">
			<!-- bouton avec JS pour revenir en arrière -->
			<button class="col-3 btn btn-dark text-center mt-4" onclick="history.back()">Retour</button>
		</div>

	</div>
	<?php include './templates/footer.php' ?>
</body>

</html>