<?php


/*$nomHotel = $_POST['nomHotel'];
$departementHotel = $_POST['departementHotel'];
$adresseHotel = $_POST['adresseHotel'];
$description = $_POST['description'];*/


if(isset($_FILES['avatar']))
{ 
	include("../conf/accesBDD.php");

	$nomHotel = $_POST['nomHotel'];
	$departementHotel = $_POST['departementHotel'];
	$adresseHotel = $_POST['adresseHotel'];
	$description = $_POST['description'];

     $fichier = basename($_FILES['avatar']['name']);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], "../images/hotel/".$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $requete = $connexion->prepare("INSERT INTO hotels (nomHotel, departementHotel, adresseHotel, descriptionHotel, imageHotel) VALUES ('$nomHotel', '$departementHotel', '$adresseHotel', '$description', '$fichier')");
		  $requete->execute(array());

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}

function listeHotel(){
include("conf/accesBDD.php");

	$sql = "SELECT nomHotel, departementHotel, adresseHotel, descriptionHotel, imageHotel from hotels";
	$requete = $connexion->prepare($sql);
	$requete->execute(array());
	$ligne = $requete->fetch();
	while ($ligne != false)
	{
		echo '<img class="imageHotel" src="images/hotel/'.$ligne["imageHotel"].'" />';
		echo 'Nom Hotel : ' . $ligne["nomHotel"];
		echo 'Departement Hotel : ' . $ligne["departementHotel"];
		echo 'Adresse Hotel : ' . $ligne["adresseHotel"];
		echo 'description Hotel : ' . $ligne["descriptionHotel"];
		echo '<hr>';
		$ligne = $requete->fetch();
	}
}
?>


