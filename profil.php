<?php 
 session_start();
 if (isset($_SESSION['user']) == false)
 {
 header("Location:login.php");
    exit();
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>

		<?php $email = $_SESSION['user'];?>

		<?php 
			include("conf/accesBDD.php");

			$sql = "SELECT * FROM clients WHERE email = '$email'";
			$requete = $connexion->prepare($sql);
			$requete->execute(array());
			$ligne = $requete->fetch();
			while ($ligne != false)
			{
				$nom = $ligne['nom'];
				$prenom = $ligne['prenom'];
				$email = $ligne['email'];
				$profession = $ligne['profession'];
				$statut = $ligne['statut'];
				$telephone = $ligne['telephone'];

				$ligne = $requete->fetch();
			}
		?>

	
	<?php include 'includes/header.inc.php'; ?>
	<section id="home_profil">
		<img src="images/communaute/gold.png" alt="membre gold" id="status_image">
		<h2>Bienvenue </h2>
		<h1><?php echo $prenom . " " . $nom;?></h1>

		<p class="user-private">
			<input type="checkbox" name="private" id="private" checked> 
			<label for="private"></label>
		</p>
		<article id="personal-info">
			<h3>Informations personelles</h3>
			<ul>
				<li>
					<b>Nom:</b> <?php echo $prenom . " " . $nom; ?>
				</li>
				<li>
					<b>Profession:</b> <?php echo $profession; ?>
				</li>
				<li>
					<b>Statut:</b> <?php echo $statut; ?>
				</li>
				<li>
					<b>Téléphone:</b> <?php echo $telephone; ?>
				</li>
				<li>
					<b>Email:</b> <?php echo $email; ?>
				</li>
			</ul>
			<a href="#" class="button">Éditer</a>
		</article>
		<article>
			<h3>Hôtels favoris</h3>
			<ul>
				<li><a href="#" title="Hôtel ...">Madison-Huntsville Hotel, MA</a></li>
				<li><a href="#" title="Hôtel ...">Royal Buriram Hotel, Buriram</a></li>
				<li><a href="#" title="Hôtel ...">Santorin Hotel, Mexico</a></li>
			</ul>
			<a href="#" class="button">voir plus</a>
		</article>
		<article>
			<h3>Hôtels visités</h3>
			<ul>
				<li><a href="#" title="Hôtel ...">Madison-Huntsville Hotel, MA</a></li>
				<li><a href="#" title="Hôtel ...">Royal Buriram Hotel, Buriram</a></li>
				<li><a href="#" title="Hôtel ...">Santorin Hotel, Mexico</a></li>
			</ul>
			<a href="#" class="button">voir plus</a>
		</article>
	</section>
	<?php include 'includes/footer.inc.php'; ?>	
	
	</body>

</html>

