<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
		
	<?php include 'includes/header.inc.php'; ?>
	<section id="home_login">
		<h2>Bienvenue sur</h2>
		<h1>BW Connect</h1>
		<p><i>Réseau social pour les clients des hôtels <span class="brand">Best Western</span>.</i></p>
		<article>
			<form action="#" method="POST" id="LOGIN" autocomplete="off">
				<h3>Se connecter à  <span class="brand">BW Connect</span></h3>
				<p>
					<label for="email">
						Email*
						<i>* de votre compte <span class="brand">Best Western</span></i>
					</label>
					<input name="email" placeholder="Votre email" id="email">
				</p>
				<p>
					<label for="password">
						Mot de passe*
						<i>* de votre compte <span class="brand">Best Western</span></i>
					</label>
					<input id="passeword" type="password" name="password" placeholder="Votre mot de passe" id="password">
				</p>
				<p>
					<button name="login" id="connexion" class="btn">Se connecter</button>
				</p>
			</form>
		</article>
	</section>
<?php include 'includes/footer.inc.php'; ?>

	<?php include("controllers/user.php"); ?>
	</body>

</html>

