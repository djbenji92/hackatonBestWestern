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

	<div id="resultat">

	</div>


	<?php include("controllers/user.php"); ?>
	</body>

</html>