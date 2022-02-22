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
		<br>
		<h2>L'accès à cette page est restreint aux membres inscrits.</h2>
		<br>
		<h2>Veuillez vous connecter ou créer un compte pour accéder
			au contenu privé.</h2>
	</div>
	<div class="myFormRegistration" id="myTwoCol">
		<h3>Pas encore membre ?</h3><br>
		<h3>La validation des devis automatiques sont réservées aux membres.</h3><br>
		<h3>Inscrivez-vous maintenant pour avoir accès à leur contenu.</h3><br>
		<h3></h3><br>
		<a href="user_registration.php">Créer un nouveau compte</a>
		<h1></h1><br>
		<div class="myConnexion">
			<h1></h1><br>
			<h3>Connexion</h3><br>
			<form action="login.php" method="post" class="form_field">
				<fieldset>
					<h3></h3><br>
					<label for="email_Field">Votre adresse e-mail</label>
					<input id="email_Field" name="Input_EmailField" required value="@" type="email" maxlength="255">
					<h3></h3><br>
					<label for="pwd_Field">Votre mot de passe</label>
					<input id="pwd_Field" name="input_pwd_Field" required value="" type="password" minlength="8">
					<p><button class="myButton" type="submit" name="btn_UserLogin">S'identifier</button></p>
				</fieldset>
			</form>
			<h3></h3><br>
			<p><a class="myFormRecovery" href="user_recovery.php">Avez-vous oublié votre mot de passe ?</a></p>
			<br>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>