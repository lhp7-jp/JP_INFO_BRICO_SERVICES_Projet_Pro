 <?php
	require '../controllers/maintenanceController.php';
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
 <h3>MAINTENANCE</h3><br>
 <h4>Veuillez sélectionnez le service que vous avez besoin et choisir la quantité,svp</h4>
 <div class="myMaintenance">
 	<form action="maintenance.php" method="post">
 		<table class="maintenanceTable">
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
 					<td><label class="detail_Choice_label" for="detail_Choice_label1">Nettoyage de l’OS (Virus, malwares, etc.): </label></td>
 					<?php include 'number_detail_Choice_input.php'; ?>
 				</tr>
 				<tr>
 					<td><label class="detail_Choice_label" for="detail_Choice_label2">Récupération de données: </label></td>
 					<?php include 'number_detail_Choice_input.php'; ?>
 				</tr>
 				<tr>
 					<td><label class="detail_Choice_label" for="detail_Choice_label3">Matériels réseau:</label></td>
 					<?php include 'number_detail_Choice_input.php'; ?>
 				</tr>
 				<tr>
 					<td><label class="detail_Choice_label" for="detail_Choice_label4">Périphériques:</label></td>
 					<?php include 'number_detail_Choice_input.php'; ?>
 				</tr>
 				<tr>
 					<td><label class="detail_Choice_label" for="detail_Choice_label5">Pc portable ou fixe: </label></td>
 					<?php include 'number_detail_Choice_input.php'; ?>
 				</tr>
 				<tr>
 					<td><label class="detail_Choice_label" for="detail_Choice_label8">Logiciels fournis par le client: </label></td>
 					<?php include 'number_detail_Choice_input.php'; ?>
 				</tr>
 				<tr>
 					<td><label class="detail_Choice_label" for="detail_Choice_label9">Formation:</label></td>
 					<?php include 'number_detail_Choice_input.php'; ?>
 				</tr>
 				<tr>
 					<td><label class="detail_Choice_label" for="detail_Choice_label9">Description:</label></td>
 					<td><textarea class="detail_Choice_area" id="myTextarea" rows="1.8" cols="25"></textarea></td>
 				</tr>
 			</tbody>
 		</table>
 	</form>
 	<?php include 'footer.php'; ?>
</body>

 </html>