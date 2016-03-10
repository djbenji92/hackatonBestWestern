<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	<?php include("controllers/activiteHotel.php"); ?>

	<?php include 'includes/header.inc.php'; include 'includes/sidebar.inc.php';?>
	<section id="activites_parent" class="with_sidebar">
	<h2>Le meilleur de <span class="branding">Best Western</span></h2>
	<h1>Activités</h1>
	<?php listeActivite(); ?>
	<a class="load_more btn">Voir plus d'activités</a>
	</section>
	<?php include 'includes/footer.inc.php'; ?>

	</body>

</html>

