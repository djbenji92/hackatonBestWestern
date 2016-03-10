<?php

function selectListeHotel(){
	include("conf/accesBDD.php");

	$sql ="SELECT * from hotels";

	$requete = $connexion->prepare($sql);
	$requete->execute(array());
	$ligne = $requete->fetch();

	echo "<select name='idHotel'>";
	while ($ligne != false)
	{
		echo '<option value="'.$ligne['idHotel'].'">'.$ligne['nomHotel']. ' ' . $ligne['departementHotel'] . '</option>';
		$ligne = $requete->fetch();
	}
	echo "</select>";
}

function listeActivite(){
include("conf/accesBDD.php");

	$sql = "SELECT * from activites";
	$requete = $connexion->prepare($sql);
	$requete->execute(array());
	$ligne = $requete->fetch();
	while ($ligne != false)
	{
		echo '<article>';
			echo '<a href="activite.php?id='.$ligne["nomActivite"].'" class="hotel_image">';
				echo '<img src="images/activite/'.$ligne["imageActivite"].'" alt="Hôtel">';
			echo '</a>';
			echo '<div class="hotel_detail">';
				echo '<h3><a href="activite.php?id='.$ligne["idActivite"].'">'.$ligne["nomActivite"].'</a></h3>';
				echo '<h4>'.$ligne["adresseActivite"].'<br>'.$ligne['villeEtPaysActivite'].'</h4>';
				echo '<p>'. $ligne["descriptionActivite"].'</p>';
				echo '<a href="activite.php?id='.$ligne["idActivite"].'" class="button">En savoir plus</a>';
			echo '</div>';
		echo '</article>';
		//
		/*echo '<a href="activite.php?id='.$ligne["idActivite"].'"><img class="imageActivite" src="images/activite/'.$ligne["imageActivite"].'" /></a>';
		echo 'Nom Activite : ' . $ligne["nomActivite"];
		echo 'Description activite : ' . $ligne["descriptionActivite"];
		echo 'Tarif activite : ' . $ligne["tarifActivite"];
		echo '<hr>';*/
		$ligne = $requete->fetch();
	}
}


function afficheInformationsActivite($id){
	include("conf/accesBDD.php");

	$sql = "SELECT * 
			FROM activites
			WHERE idActivite = '$id'
	";
						
	$requete = $connexion->prepare($sql);
	$requete->execute(array());
	$ligne = $requete->fetch();
	while ($ligne != false)
	{
		echo '<img class="imageActivite" src="images/activite/'.$ligne["imageActivite"].'" />';
		echo 'Nom Activite : ' . $ligne["nomActivite"];
		echo 'Description activite : ' . $ligne["descriptionActivite"];
		echo 'Tarif activite : ' . $ligne["tarifActivite"];
		echo '<hr>';
		$ligne = $requete->fetch();
	}
}

if(isset($_FILES['photoActivite']))
{ 
	include("../conf/accesBDD.php");

	$nomActivite = mysql_escape_string($_POST['nomActivite']);
	$tarifActivite = mysql_escape_string($_POST['tarifActivite']);
	$descriptionActivite = mysql_escape_string($_POST['descriptionActivite']);
	$idHotel = mysql_escape_string($_POST['idHotel']);
	$adresseActivite = mysql_escape_string($_POST['adresseActivite']);
	$villeEtPaysActivite = mysql_escape_string($_POST['villeEtPaysActivite']);


     $fichier = basename($_FILES['photoActivite']['name']);
     if(move_uploaded_file($_FILES['photoActivite']['tmp_name'], "../images/activite/".$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $requete = $connexion->prepare("INSERT INTO activites (nomActivite, tarifActivite, descriptionActivite, imageActivite, idHotel, adresseActivite, villeEtPaysActivite) VALUES ('$nomActivite', '$tarifActivite', '$descriptionActivite', '$fichier', '$idHotel', '$adresseActivite', '$villeEtPaysActivite')");
		  $requete->execute(array());

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}

?>