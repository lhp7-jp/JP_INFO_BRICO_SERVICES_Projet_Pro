<?php
session_start();
session_unset();
session_destroy();

$page = 'login';

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

<body class="bg-light d-flex flex-column min-vh-100">

	<?php include 'templates/navbarAdmin.php' ?>

	<div class="mt-5 container">

		<h1 class="text-center mt-5">Vous êtes bien deconnecté</h1>

		<div class="row justify-content-center mt-5">

			<div class="border border-dark px-5 pt-5 pb-4 col-lg-6 col-10">

				<div class="row mb-3">
					<a href="home.php" class="btn btn-dark">Accueil</a>
				</div>

				<div class="row">
					<a href="login.php" class="btn btn-outline-dark">Connexion</a>
				</div>

			</div>

		</div>
	</div>

	<?php include 'templates/footer.php' ?>

</body>

</html>