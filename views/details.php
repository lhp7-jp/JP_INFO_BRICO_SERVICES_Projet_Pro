<?php
session_start();

// Protection si la personne n'a pas de variable de session admin
if (!isset($_SESSION['admin'])) {
	header('Location: login.php');
	exit();
}

require_once '../controllers/detailsController.php';

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

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-5 mt-5">
				<h1 class="text-center mt-5">Détails du devis</h1>

				<?php if ($showDetails) { ?>
					<hr>
					<p class="h3 text-center">Le devis sélectionné n'existe pas</p>
					<hr>
				<?php } else { ?>
					<h2 class="text-center"># <?= $quoteDetails['lawn_id'] ?></h2>
					<p class="text-center fs-4">Demande effectuée le : <?= $quoteDetails['lawn_date'] ?></p>
					<div class="container p-3 border">
						<p>Surface à tondre : <b><?= $quoteDetails['lawn_surface'] ?>m²</b></p>
						<p>Matériel fourni : <b><?= $quoteDetails['lawn_materiel'] == 1 ? "OUI" : "NON" ?></b></p>
						<p>Description : <b><?= $quoteDetails['lawn_description'] ?></b></p>
						<p>Mail : <b><?= $quoteDetails['lawn_mail'] ?></b></p>
						<p>Téléphone : <b><?= $quoteDetails['lawn_phone'] ?></b></p>
						<hr>
						<div class="row row justify-content-evenly">
							<a class="btn btn-outline-success col-2">Répondre</a>
							<a class="btn btn-danger col-2">Supprimer</a>
						</div>
					</div>
				<?php } ?>
				<a class="btn btn-dark col-12 mt-2" href="admin.php">Retour</a>
			</div>
		</div>

	</div>

	<?php include 'templates/footer.php' ?>

</body>

</html>