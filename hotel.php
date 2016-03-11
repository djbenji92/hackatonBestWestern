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
	?>
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
				<?php
					include('conf/accesBDD.php');

					$sql="SELECT nomActivite, idActivite, imageActivite FROM activites WHERE idHotel = '$id'";
					$requete = $connexion->prepare($sql);
					$requete->execute(array());
					$ligne = $requete->fetch();
					while ($ligne != false)
					{
						echo '<li>';
							echo '<a href="activite.php?id='.$ligne['idActivite'].'">';
								echo '<img src="images/activite/'.$ligne['imageActivite'].'" alt="'.$ligne['nomActivite'].'">';
								echo '<span><b>'.$ligne['nomActivite'].'</b></span>';
							echo '</a>';
						echo '</li>';
						
						$ligne = $requete->fetch();
					}
				?>
			</ol>
			<?php echo '<a href="add_Activity.php?id='.$id.'" class="button">Ajouter une activité aux alentours</a>'; ?>
			<!-- <form action="#" method="POST" id="POST_ACTIVITY">
				<input type="hidden" value="USER NAME" name="username">
				<input type="hidden" value="USER NAME" name="username">
			</form> -->
		</article>
	</section>
	<?php include 'includes/footer.inc.php'; ?>
	
	</body>

</html>