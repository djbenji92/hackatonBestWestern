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
		$id = $_GET['id'];
	?>


	<div id="detailHotel">
		<h1>Detail activité : </h1>
		<?php afficheInformationsActivite($id); ?>
		

	</div>

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