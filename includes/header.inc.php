<!DOCTYPE html>
<html>
<head>
	<title>BW Connect</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- <script src="modules/jquery-1.11.3.min.js"></script> -->
	<script src="modules/jquery-2.1.1.js"></script>
	<script src="modules/scripts.js"></script>
</head>
<body>
<main>
	<!--seulement si connecté:-->
	<nav id="site_navigation">
		<ul>
			<li><a href="home_profil.php">Accueil</a></li>
			<li><a href="listeHotel.php">Nos hôtels</a></li>
			<li><a href="listeActivite.php">Activités</a></li>
			<li><a href="#">Communautés</a></li>
			<li><a href="#">Forums</a></li>
		</ul>
	</nav>
	<header>
		<!--seulement si connecté:-->
		<form action="#" method="GET" id="SEARCH_FORM">
			<input type="text" maxlength="255" name="search_query" placeholder="Recherchez un hôtel, une activité...">
			<button type="submit">[ICON]</button>
		</form>
	</header>