<?php
session_start();

// Protection si la personne n'a pas de variable de session admin
if (isset($_SESSION['admin'])) {
	header('Location: admin.php');
	exit();
}


require_once '../controllers/loginController.php';

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

<body class="bg-warning d-flex flex-column min-vh-100">

	<?php include 'templates/navbar.php' ?>

	<div class="mt-5 container">

		<h1 class="text-center mt-5">Connexion</h1>

		<div class="row justify-content-center mt-5">

			<div class="border border-dark px-5 pt-5 pb-4 col-lg-6 col-10">

				<form action="" method="POST">

					<div class="row mb-3">
						<div class="col text-lg-end pe-lg-4"><label for="login">Identifiant</label></div>
						<div class="col">
							<input id="login" name="login" type="text">
						</div>
					</div>

					<div class="row">
						<div class="col text-lg-end pe-lg-4"><label for="password">Mot de passe</label></div>
						<div class="col">
							<input id="password" name="password" type="password">
						</div>
					</div>

					<div class="row mt-4 text-center justify-content-center">
						<div class="text-danger login-row pb-1"><?= $errors['login'] ?? '' ?></div>
						<input type="submit" name="btn-connection" class="col-5 btn btn-dark" value="Connexion">
					</div>

				</form>

			</div>

		</div>
	</div>

	<?php include 'templates/footer.php' ?>

</body>

</html>