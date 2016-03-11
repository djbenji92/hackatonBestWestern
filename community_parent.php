<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>

		<?php include 'includes/header.inc.php';// include 'includes/sidebar.inc.php';?>
		<aside>
			<div class="sidebar_parent_community">
				<h4>Rechercher un <span class="brand">groupe</span></h4>
				<form action="#" id="SEARCH_COMMUNITY" method="GET">
					<p>Qu'aimez-vous faire dans nos hôtels?</p>
					<p>
						<input type="text" name="search_com" id="search_com" placeholder="Ex: SPA, Sport...">
						<button type="submit" class="ion-search"></button>
					</p>
				</form>
			</div>
			<div class="sidebar_child_activity_add">
				<a href="create_community.php" class="button">Créer une communauté</a>
			</div>
		</aside>

		<section id="group_feed" class="feed with_sidebar"> 
		<h2>Rejoignez un groupe <span class="branding">Best Western</span></h2>
		<h1>Communautés</h1>
			<article>
				<h4><a href="page_type_community.php">Club Golf</a></h4>
				<h5><span class="ion-ios-people"></span> 24 membres   |   <span class="ion-ios-clock-outline"></span> Créé le 24-12-2016</h5>
				<p>Club #OKLM pour les p'tites sorties sur le terrain tavu</p>
				<a href="#" class="btn">Rejoindre</a> <a href="page_type_community.php" class="btn">Accès à la page</a>
			</article>
			<article>
				<h4><a href="page_type_community.php">Club SPA</a></h4>
				<h5><span class="ion-ios-people"></span> 35 membres   |   <span class="ion-ios-clock-outline"></span> Créé le 24-12-2016</h5>
				<p>Club #OKLM tavu</p>
				<a href="#" class="btn">Rejoindre</a> <a href="page_type_community.php" class="btn">Accès à la page</a>
			</article>
			<article>
				<h4><a href="page_type_community.php">Club Premium</a></h4>
				<h5><span class="ion-ios-people"></span> 24 membres   |   <span class="ion-ios-clock-outline"></span> Créé le 24-12-2016</h5>
				<p>Club #OKLM tavu</p>
				<a href="#" class="btn">Rejoindre</a> <a href="page_type_community.php" class="btn">Accès à la page</a>
			</article>
			<article>
				<h4><a href="page_type_community.php">Club Premium</a></h4>
				<h5><span class="ion-ios-people"></span> 24 membres   |   <span class="ion-ios-clock-outline"></span> Créé le 24-12-2016</h5>
				<p>Club #OKLM tavu</p>
				<a href="#" class="btn">Rejoindre</a> <a href="page_type_community.php" class="btn">Accès à la page</a>
			</article>
		</section>
		<?php include 'includes/footer.inc.php'; ?>
	</body>

</html>