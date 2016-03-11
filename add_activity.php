<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>

		<?php include 'includes/header.inc.php';// include 'includes/sidebar.inc.php';?>
		<section id="activites_add" >
		<?php

			$id = $_GET['id'];
			include('conf/accesBDD.php');

			$sql="SELECT nomHotel FROM hotels WHERE idHotel = '$id'";
			$requete = $connexion->prepare($sql);
			$requete->execute(array());
			$ligne = $requete->fetch();
			while ($ligne != false)
			{
				echo '<h2>'.$ligne['nomHotel'].'</h2>';
						
				$ligne = $requete->fetch();
			}
		?>
		<!--<h2>Hôtel Saint-George</h2>-->
		<h1>Ajouter une activité</h1>
		<article>
<form id="WRITE_ACTIVITY" class="write_forms" action="#" method="POST">
	<p><b>Catégorie: </b>
	<select name="categorie">
		<optgroup label="Restauration">
			<option value="0">Italien</option>
			<option value="1">Français</option>
			<option value="2">Libanais</option>
			<option value="3">Japonais</option>
			<option value="4">Chinois</option>
			<option value="5">Marocain</option>
			<option value="6">Mexicain</option>
		</optgroup>
		<optgroup label="Sport">
			<option value="7">Salles de sport</option>
			<option value="8">Parcs d'exercices</option>
			<option value="9">Autres sport</option>
		</optgroup>
		<optgroup label="Shopping">
			<option value="10">Mode et beauté</option>
			<option value="11">Souvenirs</option>
			<option value="12">Maison</option>
		</optgroup>
		<optgroup label="Tourisme">
			<option value="13">Musées</option>
			<option value="14">Monuments</option>
			<option value="15">Quartiers</option>
			<option value="16">Cabarets</option>
			<option value="17">Sorties</option>
		</optgroup>
		<optgroup label="De nuit">
			<option value="18">Restaurants</option>
			<option value="19">Clubs</option>
			<option value="20">Visites</option>
		</optgroup>
	</select></p>
	<p><label for="title_activity">Nom de l'activité: </label><input type="text" name="title_activity" id="title_activity"></p>
	<p><label for="place_activity">Adresse de l'activité: </label><input type="text" name="place_activity" id="place_activity"></p>
	<?php include 'includes/form_image.inc.php'; ?>
</form>
</article>
		</section>
		<?php include 'includes/footer.inc.php'; ?>

	</body>

</html>