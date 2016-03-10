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
		     <?php 
		     	include("conf/accesBDD.php");

		     	$sql="SELECT * from categorieActivite";

		     	$requete = $connexion->prepare($sql);
				$requete->execute(array());
				$ligne = $requete->fetch();
				echo '<select name="listeCategorie">';
				while ($ligne != false)
				{

					echo '<option value="'.$ligne['idCategorie'].'">'.$ligne['nomCategorie'].'</option>';
					$ligne = $requete->fetch();
				}
				echo '</select>'
		//
		/*echo '<a href="hotel.php?id='.$ligne["idHotel"].'"><img class="imageHotel" src="images/hotel/'.$ligne["imageHotel"].'" /></a>';
		echo '<p>Nom Hotel : ' . $ligne["nomHotel"].'</p>';
		echo '<p>Departement Hotel : ' . $ligne["departementHotel"].'</p>';
		echo '<p>Adresse Hotel : ' . $ligne["adresseHotel"].'</p>';
		echo '<p>description Hotel : ' . $ligne["descriptionHotel"].'</p>';
		echo '<hr>';*/

		     ?>
		     <?php selectListeHotel(); ?>
		     <input name="nomActivite" id="nomActivite"  type="text" placeholder="Nom de l'activité">
			 <input name="tarifActivite" id="tarifActivite" placeholder="Tarif activite" type="text">
			 <input name="adresseActivite" id="adresseActivite" placeholder="Adresse" type="text">
			 <input name="villeEtPaysActivite" id="villeEtPaysActivite" placeholder="Ville et pays" type="text">
			 <textarea name="descriptionActivite" id="descriptionActivite" placeholder="Description de l'activité"></textarea>
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