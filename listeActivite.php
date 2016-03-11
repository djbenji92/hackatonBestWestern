<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	<?php include("controllers/activiteHotel.php"); ?>

	<?php include 'includes/header.inc.php';// include 'includes/sidebar.inc.php';?>
	<aside>
		<div class="sidebar_activity">
			<h4><span class="brand">Filtrer</span> les résultats par catégorie</h4>
			<p>
				<span class="switch_label">Voir seulement les acitivités disponible autour de moi</span>
				<span class="switch">
		            <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox" checked>
		            <label for="cmn-toggle-1"></label>
				</span>
			</p>
			<form action="#" method="GET" id="FILTER_RESULT">
		        <ul>
		        	<li>
			        	<label for="restauration">Restauration</label>
			        	<input type="checkbox" id="restauration" class="parent_toggle">
			        	<ol>
			        		<li>
					        	<label for="italien">Italien</label>
					        	<input type="checkbox" id="italien">
				        	</li>
			        		<li>
					        	<label for="francais">Français</label>
					        	<input type="checkbox" id="francais">
				        	</li>
			        		<li>
					        	<label for="libanais">Libanais</label>
					        	<input type="checkbox" id="libanais">
				        	</li>
			        		<li>
					        	<label for="japonais">Japonais</label>
					        	<input type="checkbox" id="japonais">
				        	</li>
			        		<li>
					        	<label for="chinois">Chinois</label>
					        	<input type="checkbox" id="chinois">
				        	</li>
			        		<li>
					        	<label for="marocain">Marocain</label>
					        	<input type="checkbox" id="marocain">
				        	</li>
			        		<li>
					        	<label for="mexicain">Mexicain</label>
					        	<input type="checkbox" id="mexicain">
				        	</li>
			        	</ol>
		        	</li>
		        	<li>
			        	<label for="sport">Sport</label>
			        	<input type="checkbox" id="sport" class="parent_toggle">
			        	<ol>
				        	<li>
					        	<label for="parcs">Parcs d'exercices</label>
					        	<input type="checkbox" id="parcs">
				        	</li>
				        	<li>
					        	<label for="salles">Salles de sport</label>
					        	<input type="checkbox" id="salles">
				        	</li>
			        		<li>
					        	<label for="autres">Autres sports</label>
					        	<input type="checkbox" id="autres">
				        	</li>
			        	</ol>
			        </li>
		        	<li>
			        	<label for="shopping">Shopping</label>
			        	<input type="checkbox" id="shopping" class="parent_toggle">
			        	<ol>
			        		<li>
					        	<label for="mode">Mode et beauté</label>
					        	<input type="checkbox" id="mode">
				        	</li>
			        		<li>
					        	<label for="souvenirs">Souvenirs</label>
					        	<input type="checkbox" id="souvenirs">
				        	</li>
			        		<li>
					        	<label for="maison">Maison</label>
					        	<input type="checkbox" id="maison">
				        	</li>
			        	</ol>
			        </li>
		        	<li>
			        	<label for="tourisme">Tourisme</label>
			        	<input type="checkbox" id="tourisme" class="parent_toggle">
			        	<ol>
			        		<li>
					        	<label for="musee">Musées</label>
					        	<input type="checkbox" id="musee">
				        	</li>
			        		<li>
					        	<label for="monuments">Monuments</label>
					        	<input type="checkbox" id="monuments">
				        	</li>
			        		<li>
					        	<label for="quartiers">Quartiers</label>
					        	<input type="checkbox" id="quartiers">
				        	</li>
			        		<li>
					        	<label for="cabarets">Cabarets</label>
					        	<input type="checkbox" id="cabarets">
				        	</li>
			        		<li>
					        	<label for="sorties">Sorties</label>
					        	<input type="checkbox" id="sorties">
				        	</li>
			        	</ol>
		        	</li>
		        	<li>
			        	<label for="nuit">La nuit</label>
			        	<input type="checkbox" id="nuit" class="parent_toggle">
			        	<ol>
			        		<li>
					        	<label for="restaurant">Restaurants</label>
					        	<input type="checkbox" id="restaurant">
				        	</li>
			        		<li>
					        	<label for="clubs">Clubs/boites de nuits</label>
					        	<input type="checkbox" id="clubs">
				        	</li>
			        		<li>
					        	<label for="visites">Visites</label>
					        	<input type="checkbox" id="visites">
				        	</li>
			        	</ol>
			        </li>
		        </ul>
			</form>
		</div>
	</aside>

	<section id="activites_parent" class="with_sidebar">
	<h2>Le meilleur de <span class="branding">Best Western</span></h2>
	<h1>Activités</h1>
	<?php listeActivite(); ?>
	<a class="load_more btn">Voir plus d'activités</a>
	</section>
	<?php include 'includes/footer.inc.php'; ?>

	</body>

</html>

