<?php
	require '../controllers/diyController.php';
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
	<h3>ELECTRICITE</h3><br>
 	<h3>Veuillez sélectionnez le service que vous avez besoin et choisir la quantité,svp</h3>
	<div class="myElectricityDiy">
	<form action="electricity_diy.php" method="post">
		<table class="electricityDiyTable">
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
					<td><label class="detail_Choice_label" for="detail_Choice_label1">Installation : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<h6></h6><br>
					<td><label class="detail_Choice_label" for="detail_Choice_label2">Remplacement : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<h6></h6><br>
					<td><label class="detail_Choice_label" for="detail_Choice_label3">Dépannage : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<h6></h6><br>
					<td><label class="detail_Choice_label" for="detail_Choice_label4">Prise : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<h6></h6><br>
					<td><label class="detail_Choice_label" for="detail_Choice_label5">Luminaire : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<h6></h6><br>
					<td><label class="detail_Choice_label" for="detail_Choice_label6">Disjoncteur : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label7">Description de votre demande :</label></td>
					<td><textarea class="detail_Choice_area" id="myTextarea" rows="1.8" cols="25"></textarea></td>
				</tr>
			</tbody>
		</table>
	</form>
	<?php include 'footer.php'; ?>
</body>
</html>