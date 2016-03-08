<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
		
	<div id="login">
		<h1>Login</h1>

		<input id="username" name="username" type="text" placeholder="Id client ou email">
		<input id="password" name="password" type="password">
		<button id="connexion">Connexion</button>

	</div>

	<?php include("controllers/user.php"); ?>
	</body>

</html>