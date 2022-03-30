<?php
require '../controllers/userRegistrationController.php';
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
	<?php include 'templates/navbar.php' ?>
	<h5></h5>
	<h3>Inscrivez-vous maintenant pour avoir accès au contenu privé de ce site.<br>
		Comme les devis, la prise de rendez-vous, etc. </h3><br>
	<h3 class="infoMandatory">Tous les champs sont obligatoires</h3><br>

	<form action="user_registration.php" method="post" class="form_field_registration">
		<label class="myLabel" for="email_Field"><strong>Adresse e-mail : </strong></label>
		<input value="<?= isset($_POST['email_Field']) ? htmlspecialchars($_POST["email_Field"]) : "" ?>" class="input_Registration" id="email_Field" name="input_EmailField" required placeholder="" size="30" type="email" maxlength="255">
		<br><label class="myLabel" for="pwd_Field"><strong>Mot de passe : </strong></label>
		<input value="<?= isset($_POST['pwd_Field']) ? htmlspecialchars($_POST["pwd_Field"]) : "" ?>" class="input_Registration" id="pwd_Field" name="inpuit_Pwd_Field" required placeholder="" size="30" type="password" minlength="8">
		<br><label class="myLabel" for="fullname_Field"><strong>Votre nom et prénom : </strong></label>
		<input value="<?= isset($_POST['fullname_Field']) ? htmlspecialchars($_POST["fullname_Field"]) : "" ?>" class="input_Registration" id="fullname_Field" name="input_Fullname_Field" required placeholder="" size="30" type="text" maxlength="150">
		<br><label class="myLabel" for="address_Field"><strong>Votre adresse : </strong></label>
		<input value="<?= isset($_POST['address_Field']) ? htmlspecialchars($_POST["address_Field"]) : "" ?>" class="input_Registration" id="adress_Field" name="input_adress_Field" required placeholder="" size="30" type="text" maxlength="150">
		<br><label class="myLabel" for="postCode_Field"><strong>Votre code postal : </strong></label>
		<input value="<?= isset($_POST['postCode_Field']) ? htmlspecialchars($_POST["postCode_Field"]) : "" ?>" class="input_Registration" id="postCode_Field" name="input_postCode_Field" required placeholder="" size="40" type="number" maxlength="5">
		<br><label class="myLabel" for="city_Field"><strong>Votre ville : </strong></label>
		<input value="<?= isset($_POST['city_Field']) ? htmlspecialchars($_POST["city_Field"]) : "" ?>" class="input_Registration" id="city_Field" name="input_city_Field" required placeholder="" size="30" type="text" maxlength="50">
		<br><label class="myLabel" for="phone_Field"><strong>Votre téléphone : </strong></label>
		<input value="<?= isset($_POST['phone_Field']) ? htmlspecialchars($_POST["phone_Field"]) : "" ?>" class="input_Registration" id="phone_Field" name="input_phone_Field" required placeholder="" size="30"  type="number" maxlength="10">
	</form>
	<div>
		<br><button class="myButton" onclick="window.location.href='user_registration_ok.php'">S'inscrire</button>
	</div>
	<?php include 'templates/footer.php' ?>
</body>

</html>