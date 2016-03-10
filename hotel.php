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
	

	<?php 
		include 'includes/header.inc.php'; 
		//include 'includes/sidebar.inc.php'
	;?>
	<aside>
		<div class="sidebar_hotel">
			<h4>Services</h4>
			<ul>
				<li class="toggle_links">
					<a href="#"><span class="ion-location active"></span> J'y ai séjourné</a>
				</li>
				<li class="toggle_links">
					<a href="#"><span class="ion-heart"></span> Ajouter aux hôtels favoris</a>
				</li>
				<li>
					<a href="http://book.bestwestern.com/bestwestern/selectRoom.do" target="_blank"><span class="ion-map"></span> Réserver un séjour</a>
				</li>
			</ul>
		</div>

	</aside>


	<section id="hotels_child" class="with_sidebar"> 
		<?php afficheInformationsHotel($id); ?>
		
		<article>
			<h3>Services et activités aux alentours l'hôtel</h3>
			<h4>Par popularité:</h4>
			<ol>
				<li>
					<a href="page_type_activite.php">
						<img src="#" alt="Viva la vida">
						<span>Boite de nuit: <b>Viva la Vida</b></span>
					</a>
				</li>
				<li>
					<a href="page_type_activite.php">
						<img src="#" alt="Parc Victor Hugo">
						<span>Ballade: <b>Parc Victor Hugo</b></span>
					</a>
				</li>
				<li>
					<a href="page_type_activite.php">
						<img src="#" alt="Musée Libération">
						<span>Culture: <b>Musée Libération</b></span>
					</a>
				</li>
				<li>
					<a href="page_type_activite.php">
						<img src="#" alt="Viva la vida">
						<span>Boite de nuit: <b>Viva la Vida</b></span>
					</a>
				</li>
				<li>
					<a href="page_type_activite.php">
						<img src="#" alt="Parc Victor Hugo">
						<span>Ballade: <b>Parc Victor Hugo</b></span>
					</a>
				</li>
				<li>
					<a href="page_type_activite.php">
						<img src="#" alt="Musée Libération">
						<span>Culture: <b>Musée Libération</b></span>
					</a>
				</li>
			</ol>
			<a href="#" class="button">Ajouter une activité aux alentours</a>
			<!-- <form action="#" method="POST" id="POST_ACTIVITY">
				<input type="hidden" value="USER NAME" name="username">
				<input type="hidden" value="USER NAME" name="username">
			</form> -->
		</article>
	</section>
	<?php include 'includes/footer.inc.php'; ?>
	
	</body>

</html>