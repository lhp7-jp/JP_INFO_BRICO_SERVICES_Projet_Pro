<?php
require '../controllers/other_servicesController.php';
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
<br>
<h3>AUTRES SERVICES</h3><br>
<div class="myOtherServices">
	<form action="other_services.php" method="post">
		<table class="otherServicesTable">
			<thead>
				<tr>
					<th scope="col"> Type de matériel </th>
					<th scope="col"> Nombre : </th>
					<th scope="col"> A Cochez </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label1">Montage de meuble: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label1">Pose de rideaux: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label1">Aide au déménagement: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label1">Autres : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label9">Description:</label></td>
					<td><textarea class="detail_Choice_area" id="myTextarea" rows="3" cols="50"></textarea></td>
				</tr>
			</tbody>
		</table>
	</form>
	<br>
	<button class="myButton" type="submit" name="btn_SendRequest" onclick="window.location.href='other_services.php'">Envoyer ma demande</button>
</div>
<?php include 'footer.php'; ?>
</body>

</html>