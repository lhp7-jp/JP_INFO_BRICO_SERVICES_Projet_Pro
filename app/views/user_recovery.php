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
	<br><h1>Mot de passe oublié</h1>
	<p><h3>Entrez votre adresse e-mail et nous vous enverrons un message contenant les instructions de réinitialisation du mot de passe.<br>
		Avez-vous perdu votre adresse e-mail? Contactez nous !</h3></p><br>
	<form action="#" method="post" class="form_field">
		<fieldset>
		<label for="email_Field">Votre adresse e-mail</label>
		<input id="email_Field" name="input_EmailField" required value="@" type="email" maxlength="255">
		</fieldset>
		<div>
		<button class="myButton" type="submit" name="btn_ResetPwd">Soumettre</button>
		</div>
	</form>
	<?php include 'footer.php'; ?>
</body>

</html>