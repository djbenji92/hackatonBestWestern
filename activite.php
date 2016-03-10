<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	<?php include("controllers/activiteHotel.php"); ?>

	<?php 
		include("conf/accesBDD.php");
		$id = $_GET['id'];

		$sql = "SELECT idHotel FROM activites WHERE idActivite = '$id'";
		$requete = $connexion->prepare($sql);
		$requete->execute(array());
		$ligne = $requete->fetch();
		while ($ligne != false)
		{
			$idHotel = $ligne['idHotel'];
			$ligne = $requete->fetch();
		}

	?>

	
	
	<?php 
		include 'includes/header.inc.php'; 
		//include 'includes/sidebar.inc.php';
	?>
	<aside>
		<div class="sidebar_child_activity">
			<?php
				$sql = "SELECT nomHotel, imageHotel FROM hotels WHERE idHotel = '$idHotel'";
				$requete2 = $connexion->prepare($sql);
				$requete2->execute(array());
				$ligne = $requete2->fetch();
				while ($ligne != false)
				{
					$nomHotel = $ligne['nomHotel'];
					$imageHotel = $ligne['imageHotel'];
					$ligne = $requete->fetch();
				}
			
			echo '<h4><span class="brand">Hotel</span> à proximité</h4>';
			echo '<a href="page_type_hotel.php">';
				echo '<img style="width:50px; height:50px" src="images/hotel/'.$imageHotel.'" alt="'.$ligne['nomHotel'].'">';
			echo '</a>';
			echo '<p>';
				echo '<strong>'.$nomHotel.'</strong>';
				echo '<a href="hotel.php?id='.$idHotel.'" class="button">Voir l\'hôtel</a>';
			echo '</p>';
			?>
		</div>
		<div class="sidebar_child_activity_add">
			<a href="share_xp.php" class="button">Partagez votre expérience</a>
			<a href="share_xp_image.php" class="button">Partagez une photo</a>
		</div>
	</aside>

	<section id="activity_child" class="with_sidebar"> 
		<?php afficheInformationsActivite($id); ?>
		
			
		<article>
			<h3>L'avis le plus pertinent</h3>
			<p class="sous_titre">Le 28-09-2016 par <a href="/user/">User Name</a> <span><i class="ion-thumbs-up"></i> 95% sont d'accord</span></p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. </p>
			<p>Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Donec porttitor ligula eu dolor. Maecenas vitae nulla consequat libero cursus venenatis. Nam magna enim, accumsan eu, blandit sed, blandit a, eros.</p>
			<a class="button" href="#">Voir d'autres avis</a>
		</article>
		<article>
			<h3>Autres activités aux alentours l'hôtel</h3>
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
		</article>
	</section>
<?php include 'includes/footer.inc.php'; ?>

	<h2>Poster un commentaire</h2>
	<?php
		$user = $_SESSION['user'];
	?>
	<div id="user"><?php echo $user ?></div>
	<div id="id"><?php echo $id ?></div>

	<?php

		if($user !== ""){
			echo'connecter';
			echo'<textarea name="commentaireActivite" id="commentaireActivite" placeholder="Partager votre experience..."></textarea>';
			echo '<button id="envoyerCommentaire">Envoyer</button>';
		}
	?>


	
	</body>

</html>