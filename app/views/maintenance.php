 <?php
	require '../controllers/serviceController.php';
?>


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
 	<br>
 	<h1>MAINTENANCE</h1><br>

 	<div>
 		<button class="myButton" type="submit" name="btn_SendRequest" onclick="window.location.href='installation.php'">Soumettre</button>
 	</div>

 	<?php include 'footer.php'; ?>
 	</body>

 </html>