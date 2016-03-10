<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	<?php include("controllers/hotel.php"); ?>

	<?php include 'includes/header.inc.php'; include 'includes/sidebar.inc.php';?>
	<section id="hotels_parent" class="with_sidebar">
	<h2>Le meilleur de <span class="branding">Best Western</span></h2>
	<h1>Nos hôtels</h1>
	
	<?php listeHotel(); ?>

	<a class="load_more btn">Voir plus d'hôtels</a>
	</section>
	<?php include 'includes/footer.inc.php'; ?>

	
	</body>

</html>

