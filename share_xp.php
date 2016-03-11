<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hackathon</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script src="modules/jquery-1.11.3.min.js"></script>
	</head>
	<body>

		<?php
			include("conf/accesBDD.php");
			$id = $_GET['id'];
			$user = $_SESSION['user'];
		?>

		<?php include 'includes/header.inc.php';// include 'includes/sidebar.inc.php';?>
		<section id="experience_add" class="with_sidebar">

		<?php
		$sql = "SELECT nomActivite FROM activites WHERE idActivite = '$id'";
		$requete = $connexion->prepare($sql);
		$requete->execute(array());
		$ligne = $requete->fetch();
		while ($ligne != false)
		{
			echo '<h2>'.$ligne['nomActivite'].'</h2>';
			$ligne = $requete->fetch();
		}
		?>

		<h1>Partagez votre expérience</h1>
		<article>
		<!--<form id="WRITE_EXPERIENCE" class="write_forms" action="controllers/commentaire.php" method="POST">-->
		<form id="WRITE_EXPERIENCE" class="write_forms">
			<div id="write_container">
				<div id="post_assets">
					<ul>
						<li><span class="fa fa-bold"></span></li>
						<li><span class="fa fa-italic"></span></li>
						<li><span class="fa fa-underline"></span></li>
						<li><span class="fa fa-header"></span></li>
						<li><span class="fa fa-list-ul"></span></li>
						<li><span class="fa fa-link"></span></li>
						<li><span class="fa fa-align-left"></span></li>
						<li><span class="fa fa-align-center"></span></li>
					</ul>
				</div>
				<textarea id="avis" name="avis"></textarea>
				<?php 
					echo '<input id="id" name="id" type="HIDDEN" value="'.$id.'">';
					echo '<input id="user" name="user" type="HIDDEN" value="'.$user.'">';
				?>
				
			</div>
			<!--<button id="envoieCom" type="submit" class="btn">Poster</button>-->
			<button id="envoieCom" class="btn">Poster</button>
		</form>

		</article>
		</section>
		

		<script>
		$("#envoieCom").click(function(){
	     	var id = $("#id").val();
	     	var user = $("#user").val();
	     	var avis = $("#avis").val();
   			
   			var xhr;
			try { 
				xhr = new XMLHttpRequest(); 
			}
			catch (e) {
				xhr = new ActiveXObject(Microsoft.XMLHTTP);
			}  
			xhr.onreadystatechange = function () {
			if (xhr.readyState == 4)
				if (xhr.status == 200){
					document.location("activite.php?id=" + xhr.responseText)
					//alert('ok');
				}
				//document.getElementById("mydiv").innerHTML=xhr.responseText;
				else
					alert(xhr.status);
				}

				xhr.open('POST', 'controllers/ajouteCommentaire.php', true);
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhr.send('id=' + id +'&user=' + user + '&avis=' + avis);
		 });
		</script>



	</body>

</html>