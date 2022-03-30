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
		<h1 class="mt-5 text-center">Taillage</h1>
		<h2 class="text-center">Demande de devis</h2>

		<form action="" method="POST" novalidate>
			<p class="text-center">Les champs avec un * sont obligatoires</p>
			<div class="container border border-dark p-5">

				<div class="row justify-content-center mb-3">
					<div class="col-lg-4 col">
						<label for="hedge-length"><i class="bi bi-check"></i> <b>Longueur de la haie à tailler *</b> (<i> en m </i>)</label>
					</div>
					<div class="col-lg-3 col">
						<input id="hedge-length" name="hedge-length" type="number" size="5" placeholder="32" required>
					</div>
				</div>

				<div class="row justify-content-center mb-3">
					<div class="col-lg-4 col">
						<label for="hedge-height"><i class="bi bi-check"></i> <b>Hauteur de la haie à tailler *</b> (<i> en m </i>)</label>
					</div>
					<div class="col-lg-3 col">
						<input id="hedge-height" name="hedge-height" type="number" size="5" placeholder="2" required>
					</div>
				</div>

				<div class="row justify-content-center mb-3">
					<div class="col-lg-4 col">
						<label for="shrub"><i class="bi bi-check"></i> <b>Nombre d'arbuste à tailler *</b></label>
					</div>
					<div class="col-lg-3 col">
						<input id="shrub" name="shrub" type="number" size="5" placeholder="5" required>
					</div>
				</div>

				<div class="row justify-content-center mb-3">
					<div class="col-lg-4 col">
						<label for="tree"><i class="bi bi-check"></i> <b>Nombre d'arbre à tailler*</b></label>
					</div>
					<div class="col-lg-3 col">
						<input id="tree" name="tree" type="number" size="5" placeholder="32" required>
					</div>
				</div>

				<div class="row justify-content-center mb-3">
					<div class="col-lg-4 col">
						<label for="materiel"><i class="bi bi-check"></i> <b>Matériels fournis</b> (<i> cocher si oui </i>)</label>
					</div>
					<div class="col-lg-3 col">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" name="materiel" id="materiel">
						</div>
					</div>
				</div>

				<div class="row justify-content-center align-items-center mb-3">
					<div class="col-lg-4 col-12">
						<label for="description"><i class="bi bi-check"></i> <b>Informations complémentaires</b></label>
					</div>
					<div class="col-lg-3 col-12">
						<textarea name="description" id="description" placeholder="Détails à prendre en compte ..."></textarea>
					</div>
				</div>

				<div class="row justify-content-center mb-3">
					<div class="col-lg-4 col-12">
						<label for="mail"><i class="bi bi-check"></i> <b>Mail de contact *</b></label>
					</div>
					<div class="col-lg-3 col-12">
						<input type="text" name="mail" id="mail" placeholder=" mon-mail@mail.fr" required>
					</div>
				</div>

				<div class="row justify-content-center mb-3">
					<div class="col-lg-4 col-12">
						<label for="phone"><i class="bi bi-check"></i> <b>Numéro de contact *</b></label>
					</div>
					<div class="col-lg-3 col-12">
						<input type="text" name="phone" id="phone" placeholder=" 0633xxxxxx">
					</div>
				</div>

				<div class="row justify-content-center">
					<input type="submit" name="btn-submit" class="btn btn-dark col-lg-4 col-6 mt-4" value="Valider la demande">
				</div>
			</div>
		</form>

		<div class="row justify-content-center">
			<!-- bouton avec JS pour revenir en arrière -->
			<button class="col-lg-3 col-4 btn btn-secondary text-center m-4" onclick="history.back()">Retour</button>
		</div>

	</div>
	<?php include './templates/footer.php' ?>
</body>

</html>