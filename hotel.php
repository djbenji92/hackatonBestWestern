<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	<?php include("controllers/hotel.php"); ?>

	<?php 
		$id = $_GET['id'];
	?>

	<div id="detailHotel">
		<h1>Detail hotel : </h1>
		<?php afficheInformationsHotel($id); ?>
		

	</div>

	
	</body>

</html>