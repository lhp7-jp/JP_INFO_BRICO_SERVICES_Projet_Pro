<?php
session_start();

// Protection si la personne n'a pas de variable de session admin
if (!isset($_SESSION['admin'])) {
	header('Location: login.php');
	exit();
}

require_once '../controllers/adminController.php';

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
			<div class="col-lg-10 mt-5">
				<h1 class="text-center my-5">Gestion des demandes de Devis</h1>
				<div class="row">
					<select class="col-3 ms-5 mb-4" name="" id="">
						<option value="1" selected>Jardinage</option>
						<option value="2">Bricolage</option>
						<option value="3">Informatique</option>
						<option value="4">Autres</option>
					</select>
				</div>
				<div class="container">
					<table class="table table-sm table-striped table-hover text-center">
						<thead>
							<tr>
								<th>#</th>
								<th>Date</th>
								<th>Type de demande</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($quotesArray as $quote) { ?>
								<tr class="align-middle">
									<th><?= $quote['lawn_id'] ?></th>
									<td><?= $quote['lawn_date'] ?></td>
									<td>Jardinage</td>
									<td><a class="btn btn-dark" href="details.php?id=<?= $quote['lawn_id'] ?>">+ détails</a></td>
									<td><a class="btn btn-danger">supprimer</a></td>
								</tr>
							<?php } ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>

	<?php include 'templates/footer.php' ?>

</body>

</html>