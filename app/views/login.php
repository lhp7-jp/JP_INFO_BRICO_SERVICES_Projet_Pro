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
	<div class="myFormLogin">
		<h6></h6><br>
		<h3>L'accès à certaines pages de ce site est restreint aux membres inscrits.</h3>
		<br>
		<h3>Veuillez vous connecter ou créer un compte pour accéder
			au contenu privé.</h3>
		<h3></h3>
	</div>
	<div class="mainFormRegistration">
		<div class="myConnexion">
			<!-- <h1></h1> -->
			<h3 class="myTitleConnexion">Connexion</h3><br>
			<form action="login.php" method="post" class="form_Field">
				<h4></h4><br>
				<label class="myLabel" for="email_Field"><strong>Votre adresse e-mail : </strong></label>
				<input value="<?= isset($_POST['email_Field']) ? htmlspecialchars($_POST["email_Field"]) : "" ?>"
				 id="email_Field" name="input_EmailField" required placeholder="" type="email" size=40 maxlength="255">
				<h4></h4><br>
				<label class="myLabel" for="pwd_Field"><strong>Votre numéro de téléphone : </strong></label>
				<input value="<?= isset($_POST['pwd_Field']) ? htmlspecialchars($_POST["pwd_Field"]) : "" ?>"
				 id="pwd_Field" name="input_pwd_Field" required placeholder="" size=10 type="password" minlength="10">
				<p><button class="myButton" type="submit" name="btn_UserLogin">S'identifier</button></p>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>