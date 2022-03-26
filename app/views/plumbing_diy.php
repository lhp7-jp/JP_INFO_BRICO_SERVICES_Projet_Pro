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
	<h3>BRICOLAGE</h3><br>
 <h3>Veuillez sélectionnez le service que vous avez besoin et choisir la quantité,svp</h3>
	<div class="myDiy">
	<form action="diy.php" method="post">
		<table class="diyTable">
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
					<td><label class="detail_Choice_label" for="detail_Choice_label1">Services : </label></td>
					<?php include 'number_detail_Choice_input.php'; ?>
				</tr>
				<tr>
					<td><label class="detail_Choice_label" for="detail_Choice_label9">Description:</label></td>
					
				</tr>
			</tbody>
		</table>
	</form>
	<?php include 'footer.php'; ?>
</body>
</html>