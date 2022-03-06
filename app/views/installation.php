<?php
require '../controllers/installationController.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link href="/public/style/style.css" rel="stylesheet" />-->
	<link href="/public/style/style_responsive.css" rel="stylesheet" />

	<title>JP INFO BRICO SERVICES</title>
</head>
<?php include 'header.php'; ?>
<br>
<h4>INSTALLATION</h4>
<div class="myInstallation">
	<form action="installation.php" method="post">
		<table class="installationTable">
			<thead>
				<tr>
					<th scope="col"> Type de matériel </th>
					<th scope="col"> Nombre : </th>
					<th scope="col"> A Cochez </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<h6></h6><br>
					<td><label class="detail_Choice_label" for="detail_Choice_label1">Imprimante : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label2">Scanner : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label3">Mémoire :</label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label4">Box internet :</label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label5">CPL: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label6">Routeur/switch : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label7">Répéteur WIFI: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label8">Logiciels fournis par le client: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label9">Site Web:</label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
			</tbody>
		</table>
	</form>
	<button class="myButton" type="submit" name="btn_SendRequest" onclick="window.location.href='installation.php'">Soumettre</button>
</div>
<?php include 'footer.php'; ?>

</body>

</html>