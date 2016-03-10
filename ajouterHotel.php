<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	
	<h1>Ajouter hotel</h1>

	<form method="POST" action="controllers/hotel.php" enctype="multipart/form-data">
	     <!-- On limite le fichier à 10Mo -->
	     <input name="nomHotel" id="nomHotel"  type="text" placeholder="Nom de l'hotel">
		 <input name="departementHotel" id="departementHotel" placeholder="Departement de l'hotel" type="text">
		 <textarea name="adresseHotel" id="adresseHotel" placeholder="Adresse de l'hotel"></textarea>
		 <textarea name="villeEtPays" id="villeEtPays" placeholder="Ville et pays"></textarea>
		 <textarea name="description" id="description" placeholder="Description de l'hotel"></textarea>
	     <input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
	     Fichier : <input type="file" name="avatar">
	     <input type="submit" name="envoyer" value="Envoyer le fichier">
	</form>

	<!--V3-->


	<div id="images_preview"></div>


	<?php include("controllers/hotel.php"); ?>
	</body>

</html>