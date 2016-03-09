<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	
		
	<div id="hotel">
		<h1>Ajouter Hotel :</h1>
		<form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="controllers/hotel.php">
		<input id="nomHotel"  type="text" placeholder="Nom de l'hotel">
		<input id="departementHotel" placeholder="Departement de l'hotel" type="text">
		<textarea id="adresseHotel" placeholder="Adresse de l'hotel"></textarea>
		<textarea id="description" placeholder="Description de l'hotel"></textarea>
		<input type="file" name="images[]" id="images" multiple >
		<button id="ajouterHotel">Valider</button>
	</div>

	<form method="POST" action="controllers/hotel.php" enctype="multipart/form-data">
	     <!-- On limite le fichier à 10Mo -->
	     <input name="nomHotel" id="nomHotel"  type="text" placeholder="Nom de l'hotel">
		 <input name="departementHotel" id="departementHotel" placeholder="Departement de l'hotel" type="text">
		 <textarea name="adresseHotel" id="adresseHotel" placeholder="Adresse de l'hotel"></textarea>
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