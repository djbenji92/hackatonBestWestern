<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
	
		
	<div id="inscriptionCompte">
		<h1>Inscription</h1>

		<input id="username" name="username" type="text" placeholder="email">
		<input id="password" name="password" type="password">
		<button id="inscription">inscription</button>
	</div>

	<?php include 'includes/header.inc.php'; ?>
	<section id="home_register">
		<h2>Bienvenue sur</h2>
		<h1>BW Connect</h1>
		<p><i>Réseau social pour les clients des hôtels <span class="brand">Best Western</span>.</i></p>
		<article>
			<!--<form action="#" method="POST" id="REGISTER" autocomplete="off">-->
			<form id="REGISTER" autocomplete="off">
				<h3>S'inscrire à  <span class="brand">BW Connect</span></h3>
				<p>
					<label for="numero_client">
						Numéro client <span class="brand">Best Western</span>
					</label>
					<input type="text" name="numero_client" placeholder="Votre numéro client" id="numero_client">
				</p>
				<p>
					<label for="email">
						Email
					</label>
					<input type="email" name="email" placeholder="Votre email" id="username">
				</p>
				<p>
					<label for="password">
						Mot de passe
					</label>
					<input type="password" name="password" placeholder="Votre mot de passe" id="password">
				</p>
				<p>
					<label for="password_validate">
						Confirmation du mot de passe
					</label>
					<input type="password" name="password_validate" placeholder="Votre mot de passe" id="password_validate">
				</p>
				<br>
				<p>
					<label for="name">
						Votre nom
					</label>
					<input type="text" name="name" placeholder="Votre nom" id="name">
				</p>
				<p>
					<label for="profession">
						Votre profession
					</label>
					<input type="text" name="profession" placeholder="Votre profession" id="profession">
				</p>
				<p>
					<label for="phone">
						Votre numéro de téléphone
					</label>
					<input type="text" name="phone" placeholder="Votre numéro de téléphone" id="phone">
				</p>
				<br>
				<p>
					<!--<button type="submit" name="login" class="btn">S'enregistrer</button>-->
					<button id="inscription" name="login" class="btn">S'enregistrer</button>
				</p>
			</form>
		</article>
	</section>
	<?php include 'includes/footer.inc.php'; ?>

	<div id="resultat">
	</div>


	<?php include("controllers/user.php"); ?>
	</body>

</html>