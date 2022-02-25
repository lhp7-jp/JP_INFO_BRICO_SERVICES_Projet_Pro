<?php
require '../controllers/installationController.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- <link href="/public/style/style.css" rel="stylesheet" />-->
	<link href="/public/style/style_responsive.css" rel="stylesheet" />

	<title>JP INFO BRICO SERVICES</title>
</head>
<?php include 'header.php'; ?>
<br>
<h2>INSTALLATION</h2><br>
<div>
	<form action="installation.php" method="post">
		<table class="table table-striped"">
	<thead>
    <tr>
		<th scope=" col">Type de matériel</th>
			<th scope="col">Nombre : </th>
			<th scope="col">A cocher </th>
			</tr>
			</thead>
			<tbody>
				<tr>
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
				<!--
				
				<td><label class="detail_Choice_label" for="detail_Choice_label4">Box internet :</label></td>
				<td><label class="detail_Choice_label" for="detail_Choice_label5">CPL: </label></td>
				<td><label class="detail_Choice_label" for="detail_Choice_label6">Routeur/switch : </label></td>
				<td><label class="detail_Choice_label" for="detail_Choice_label7">Répéteur WIFI: </label></td>
				<td><label class="detail_Choice_label" for="detail_Choice_label8">Logiciels fournis par le client: </label></td>
				<td><label class="detail_Choice_label" for="detail_Choice_label9">Site Web:</label></td> -->
			</tbody>
		</table>
	</form>
</div>
<div>
	<button class="myButton" type="submit" name="btn_SendRequest" onclick="window.location.href='installation.php'">Soumettre</button>
</div>
<?php include 'footer.php'; ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- 	Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>