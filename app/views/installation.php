<?php
require '../controllers/installationController.php';
// $numField = 'instal_Info1';
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
<!-- Ici nous mettons le contenu de la page -->
<br>
<h4>INSTALLATION</h4><br>
<h4>Veuillez sélectionnez le service que vous avez besoin et choisir la quantité,svp</h4>
<div class="myInstallation">
	<form action="" method="post">
		<table class="installationTable">
			<thead>
				<br>
				<tr>
					<th scope="col"> Type de matériel </th>
					<th scope="col"> Nombre : </th>
					<th scope="col"> A Cochez </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<? $numField = 'instal_Info1'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label1">Imprimante: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info2'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label2">Scanner: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info3'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label3">Mémoire,Carte graphique,etc.:</label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info4'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label4">Box internet:</label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info5'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label5">CPL: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info6'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label6">Routeur/switch: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info7'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label7">Répéteur WIFI: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info8'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label8">Logiciels fournis par le client: </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info9'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label9">Site Web:</label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<? $numField = 'instal_Info10'; ?>
					<td><label class="detail_Choice_label" for="detail_Choice_label10">Description:</label></td>
					<td><textarea class="detail_Choice_area" id="myTextarea" rows="1.8" cols="25"></textarea></td>
				</tr>
			</tbody>
		</table>
	</form>
	<?php include 'footer.php'; ?>
	</body>

</html>