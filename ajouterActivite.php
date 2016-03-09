<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	
<?php include("controllers/activiteHotel.php"); ?>
	<div id="addActivite">
		<form method="POST" action="controllers/activiteHotel.php" enctype="multipart/form-data">
		     <!-- On limite le fichier à 10Mo -->
		     <?php selectListeHotel(); ?>
		     <input name="nomActivite" id="nomActivite"  type="text" placeholder="Nom de l'activité">
			 <input name="tarifActivite" id="tarifActivite" placeholder="Departement de l'hotel" type="text">
			 <textarea name="descriptionActivite" id="descriptionActivite" placeholder="Description de l'hotel"></textarea>
		     <input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
		     Fichier : <input type="file" name="photoActivite">
		     <input type="submit" name="envoyer" value="Envoyer le fichier">
		</form>
	</div>	

	<!--<select name="listeHotel">
		<option></option>
	</select>-->

	
	
	

	</body>

</html>