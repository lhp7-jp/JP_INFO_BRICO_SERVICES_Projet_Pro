<?php

$page = 'feedbacks';

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

	<div class="container px-lg-5 my-5">
		<h1 class="my-5 text-center">Ce que disent nos clients</h1>
		<div class="card mb-3">
			<div class="card-body">
				<figure class="px-4">
					<p class="fst-italic">Le 23/06/2021</p>
					<blockquote class="blockquote">
						<p>Le travail a été rapide et correctement effectué.</p>
					</blockquote>
					<figcaption class="blockquote-footer">
						Marc Fournier <cite title="Source Title">Directeur / Entreprise</cite>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="card mb-3">
			<div class="card-body">
				<figure class="px-4">
					<p class="fst-italic">Le 17/05/2021</p>
					<blockquote class="blockquote">
						<p>Les délais ont été respectés et le travail fait avec soin.</p>
					</blockquote>
					<figcaption class="blockquote-footer">
						Louise Chevalier <cite title="Source Title">Marketing / Entreprise</cite>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="card mb-3">
			<div class="card-body">
				<figure class="px-4">
					<p class="fst-italic">Le 21/01/2020</p>
					<blockquote class="blockquote">
						<p>Très bon artisan, respectueux de son travail. Avec de très bonnes idées de pose.</p>
					</blockquote>
					<figcaption class="blockquote-footer">
						Sarah Lemaire <cite title="Source Title">Ventes / Entreprise</cite>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="card mb-3">
			<div class="card-body">
				<figure class="px-4">
					<p class="fst-italic">Le 30/11/2019</p>
					<blockquote class="blockquote">
						<p>Travail moyen et plus long que prévu.</p>
					</blockquote>
					<figcaption class="blockquote-footer">
						Bertrand Macron <cite title="Source Title">Directeur / Entreprise</cite>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>


	<!-- <div class="myTitleAvis">
		<br><h3>Avis clients</h3>
		<br><h3>Ce que disent nos clients</h3>
	</div>
	<div class="myAvis" id="myTwoCol">
		<img class="myPicture" src="/public/pictures/computer_scientist.png" alt="" loading="lazy"></picture>
		<h5>Marc Fournier</h5>
		<h5>Directeur&nbsp;/&nbsp;Entreprise</h5>
		<h5><em>"Le travail a été rapide et correctement effectué."</em></h5>

		<img class="myPicture" src="/public/pictures/reading-book.png" alt="" loading="lazy">
		<h5>Louise Chevalier</h5>
		<h5>Marketing&nbsp;/&nbsp;Entreprise</h5>
		<h5><em>"Les délais ont été respectés et le travail fait avec soin<."</em></h5>

		<img class="myPicture" src="/public/pictures/teacher.png" alt="" loading="lazy"></picture>
		<h5>Sarah Lemaire</h5>
		<h5>Ventes&nbsp;/&nbsp;Entreprise</h5>
		<h5><em>"Très bon artisan, respectueux de son travail. Avec de très bonnes idées de pose."</em></h5>

		<img class="myPicture" src="/public/pictures/chauve.png" alt="" loading="lazy"></picture>
		<h5>Bertrand Macron</h5>
		<h5>Directeur&nbsp;/&nbsp;Entreprise</h5>
		<h5><em>"Travail moyen et plus long que prévu."</em></h5>
	</div> -->

	<?php include 'templates/footer.php' ?>
</body>

</html>