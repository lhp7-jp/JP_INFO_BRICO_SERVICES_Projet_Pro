<?php
// var_dump($_POST);
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

<body>
	<?php include 'header.php'; ?>
	<h1></h1><br>
	<p><img src="/public/pictures/icon_reussite.png" alt="Icon réussite" class="sucessPicture" /></p>
	<br><h4>Votre inscription est validée. Bravo.<h4><br>	
	<p><button class="myButton" name="btn_UserLogin" onclick="window.location.href='login.php'">Connexion</button></p>
	<?php include 'footer.php'; ?>
</body>

</html>