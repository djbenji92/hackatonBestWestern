<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>
		<h1>GOOOOO HACKATHON</h1>

		<p>TEST BDD</p>
		<?php
			
			
			include("conf/accesBDD.php");
			$sql = "SELECT *
				FROM utilisateurs
				";
						
			$requete = $connexion->prepare($sql);
			$requete->execute(array());
			$ligne = $requete->fetch();
			while ($ligne != false)
			{
				$login = $ligne["login"];
				$password = $ligne["password"];
				  
				$ligne = $requete->fetch();
			}
				
		?>	

		<h2>Login : <?php echo $login; ?></h2>
		<h2>Password : <?php echo $password; ?></h2>

		<!-- verif jquery -->
		<p>Test Jquery</p>
		<h1 id="jquery">NE DOIS PAS APPARAITRE</h1>
		<script>
			$('#jquery').hide();
		</script>
	
	</body>

</html>