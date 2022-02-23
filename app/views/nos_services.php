<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link href="/public/style/style.css" rel="stylesheet" /> -->
	<link href="/public/style/style_responsive.css" rel="stylesheet" />

	<title>JP INFO BRICO SERVICES</title>
</head>
<?php include 'header.php'; ?>
<!-- Ici nous mettons le contenu de la page -->
<div>
	<div class="myQuestionService">
		<h2>De quel service avez-vous besoin?</h2>
	</div>

	<div class="myService" id="myTwoCol">
		<div class="myCategories">
			<h3></h3><br>
			<a href="computer.php">INFORMATIQUE</a>
			<img src="/public/pictures/icon_support_informatique.png" alt="Informatique" class="myPicture">
			<h3></h3><br>
		</div>
		<div class="myCategories">
			<h3></h3><br>
			<a href="diy.php">BRICOLAGE</a>
			<img src="/public/pictures/handyman_tools.png" alt="Bricolage" class="myPicture">
			<h3></h3><br>
		</div>
		<div class="myCategories">
			<h3></h3><br>
			<a href="garden.php">JARDIN</a>
			<img src="/public/pictures/icons_garden.png" alt="Jardin" class="myPicture">
			<h3></h3><br>
		</div>
		<div class="myCategories">
			<h3></h3><br>
			<a href="other_services.php">AUTRES SERVICES</a>
			<img src="/public/pictures/icon_information.png" alt="Autres services" class="myPicture">
			<h3></h3><br>
		</div></br>
	</div>
	<?php include 'footer.php'; ?>
	</body>

</html>