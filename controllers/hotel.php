<?php


/*$nomHotel = $_POST['nomHotel'];
$departementHotel = $_POST['departementHotel'];
$adresseHotel = $_POST['adresseHotel'];
$description = $_POST['description'];*/


if(isset($_FILES['avatar']))
{ 
	include("../conf/accesBDD.php");

	$nomHotel = mysql_escape_string($_POST['nomHotel']);
	$departementHotel = mysql_escape_string($_POST['departementHotel']);
	$adresseHotel = mysql_escape_string($_POST['adresseHotel']);
	$villeEtPays = mysql_escape_string($_POST['villeEtPays']);
	$description = mysql_escape_string($_POST['description']);

     $fichier = basename($_FILES['avatar']['name']);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], "../images/hotel/".$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $requete = $connexion->prepare("INSERT INTO hotels (nomHotel, departementHotel, adresseHotel, descriptionHotel, imageHotel, villeEtPays) VALUES ('$nomHotel', '$departementHotel', '$adresseHotel', '$description', '$fichier', '$villeEtPays')");
		  $requete->execute(array());

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}

function listeHotel(){
include("conf/accesBDD.php");

	$sql = "SELECT * from hotels";
	$requete = $connexion->prepare($sql);
	$requete->execute(array());
	$ligne = $requete->fetch();
	while ($ligne != false)
	{
		echo '<article>';
			echo '<a href="hotel.php?id='.$ligne["idHotel"].'" class="hotel_image">';
				echo '<img src="images/hotel/'.$ligne["imageHotel"].'" alt="Hôtel">';
			echo '</a>';
			echo '<div class="hotel_detail">';
				echo '<h3><a href="hotel.php?id='.$ligne["idHotel"].'">' . $ligne["nomHotel"].'</a></h3>';
				echo '<h4>'.$ligne["adresseHotel"].'<br>'.$ligne['villeEtPays'].'</h4>';
				echo '<p>' . $ligne["descriptionHotel"].'</p>
				<a href="hotel.php?id='.$ligne["idHotel"].'" class="button">En savoir plus</a>';
			echo '</div>';
		echo '</article>';
		//
		/*echo '<a href="hotel.php?id='.$ligne["idHotel"].'"><img class="imageHotel" src="images/hotel/'.$ligne["imageHotel"].'" /></a>';
		echo '<p>Nom Hotel : ' . $ligne["nomHotel"].'</p>';
		echo '<p>Departement Hotel : ' . $ligne["departementHotel"].'</p>';
		echo '<p>Adresse Hotel : ' . $ligne["adresseHotel"].'</p>';
		echo '<p>description Hotel : ' . $ligne["descriptionHotel"].'</p>';
		echo '<hr>';*/
		$ligne = $requete->fetch();
	}
}

function afficheInformationsHotel($id){
	include("conf/accesBDD.php");

	$sql = "SELECT * 
			FROM hotels
			WHERE idHotel = '$id'
	";
						
	$requete = $connexion->prepare($sql);
	$requete->execute(array());
	$ligne = $requete->fetch();
	while ($ligne != false)
	{
		echo '<h2>Hôtel</h2>';
		echo '<h1>'.$ligne["nomHotel"].'</h1>';
		echo '<div class="slideshow">';
			//différentes images de l'hôtel-->
			echo '<div class="slide">';
				echo '<img src="images/hotel/'.$ligne['imageHotel'].'">';
			echo '</div>';
		echo '</div>';
		echo '<article>';
			echo '<h3>Description</h3>';
			echo '<p>'.$ligne['descriptionHotel'].'</p>';
			echo '<a href="http://book.bestwestern.com/bestwestern/MX/Cd-Victoria-hotels/BEST-WESTERN-Santorin/Hotel-Overview.do?propertyCode=70078" target="_blank" class="button">En savoir plus</a>';
		echo '</article>';
		echo '<article>';
			echo '<h3>Services et activités de l\'hôtel</h3>';
			echo '<ul>';
				echo '<li><input type="checkbox" disabled="true" checked> SPA</li>';
				echo '<li><input type="checkbox" disabled="true" checked> Golf</li>';
				echo '<li><input type="checkbox" disabled="true" checked> Salle de sport</li>';
				echo '<li><input type="checkbox" disabled="true" checked> Terrain de tennis</li>';
				echo '<li><input type="checkbox" disabled="true" checked> Salle de réunion</li>';
				echo '<li><input type="checkbox" disabled="true" checked> Petit déjeuner gratuit</li>';
				echo '<li><input type="checkbox" disabled="true" checked> WIFI Gratuit</li>';
				echo '<li><input type="checkbox" disabled="true"> Animaux</li>';
			echo '</ul>';
		echo '</article>';
		//
		/*echo '<img class="imageHotel" src="images/hotel/'.$ligne["imageHotel"].'" />';
		echo 'Nom Hotel : ' . $ligne["nomHotel"];
		echo 'Departement Hotel : ' . $ligne["departementHotel"];
		echo 'Adresse Hotel : ' . $ligne["adresseHotel"];
		echo 'description Hotel : ' . $ligne["descriptionHotel"];
		echo '<hr>';*/
		$ligne = $requete->fetch();
	}
}
?>


