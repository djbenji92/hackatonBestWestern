<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	<?php include("controllers/hotel.php"); ?>

	<?php include 'includes/header.inc.php';// include 'includes/sidebar.inc.php';?>
	<aside>
		<div class="sidebar_parent_community">
			<h4>Rechercher un <span class="brand">hôtel</span></h4>
			<form action="#" id="SEARCH_COMMUNITY" method="GET">
				<p>
					<input type="text" name="search_com" id="search_com" placeholder="Saisissez une ville, un pays...">
					<button type="submit" class="ion-search"></button>
				</p>
			</form>
		</div>
	</aside>

	<section id="hotels_parent" class="with_sidebar">
	<h2>Le meilleur de <span class="branding">Best Western</span></h2>
	<h1>Nos hôtels</h1>
	
	<?php listeHotel(); ?>

	<a class="load_more btn">Voir plus d'hôtels</a>
	</section>
	<?php include 'includes/footer.inc.php'; ?>

	
	</body>

</html>

