<?php
require_once '../controllers/userRegistrationController.php';
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
	<br><h2>Inscrivez-vous maintenant pour avoir accès au contenu privé de ce site.<br> 
	Comme les devis, la prise de rendez-vous, etc.</h2>

	<form action="user_registration.php" method="post" class="form_field_registration">
		<fieldset>
			<div class="myFormRegistration">
				<label for="email_Field">Adresse e-mail</label>
				<input class="input_Registration" id="email_Field" name="input_EmailField" required value="@" type="email" maxlength="255">
				<br><label for="pwd_Field">Mot de passe</label>
				<input class="input_Registration" id="pwd_Field" name="inpuit_Pwd_Field" required value="" type="password" minlength="8">
				<br><label for="fullname_Field">Votre nom et prénom</label>
				<input class="input_Registration" id="fullname_Field" name="input_Fullname_Field" required value="" type="text" maxlength="150">
				<br><label for="adress_Field">Votre adresse</label>
				<input  class="input_Registration" id="adress_Field" name="input_adress_Field" required value="" type="text" maxlength="150">
				<br><label for="postCode_Field">Votre code postal</label>
				<input class="input_Registration" id="postCode_Field" name="input_postCode_Field" required value="" type="number" maxlength="5">
				<br><label for="city_Field">Votre ville</label>
				<input class="input_Registration" id="city_Field" name="input_city_Field" required value="" type="text" maxlength="50">
				<br><label for="phone_Field">Votre téléphone</label>
				<input class="input_Registration" id="phone_Field" name="input_phone_Field" required value="" type="number" maxlength="10">
			</div>
		</fieldset>
	</form>
	<div>
	<br><button class="myButton" onclick="window.location.href='user_registration_ok.php'">S'inscrire</button>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>