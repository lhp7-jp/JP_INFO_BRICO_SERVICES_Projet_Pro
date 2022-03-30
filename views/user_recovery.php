<?php
require '../controllers/userRecoveryController.php';
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
	<h1>Mot de passe oublié</h1>
	<h6></h6>
	<h3>Entrez votre adresse e-mail et nous vous enverrons un message contenant les instructions de réinitialisation du mot de passe.</h3><br>
	<h3>Vous avez perdu votre adresse e-mail? Contactez-nous !</h3><br>
	<h6></h6>
	<div>
		<p>
		<form action="user_recovery.php" method="post" class="form_Field_R">
			<h3></h3><br>
			<label class="myLabel" for="email_Field"><strong>Votre adresse e-mail : </strong></label>
			<input value="<?= isset($_POST['email_Field']) ? htmlspecialchars($_POST["email_Field"]) : "" ?>" id="email_Field" name="input_EmailField" required placeholder="" type="email" maxlength="255">
			<h3></h3><br>
		</form>
		</p>
	</div>
	<div>
		<button class="myButton" type="submit" name="btn_ResetPwd" onclick="window.location.href='user_recovery.php'">Soumettre</button>
	</div>

	<?php include 'templates/footer.php' ?>
</body>

</html>