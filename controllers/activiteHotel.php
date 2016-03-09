<?php

function selectListeHotel(){
	include("conf/accesBDD.php");

	$sql ="SELECT * from hotels";

	$requete = $connexion->prepare($sql);
	$requete->execute(array());
	$ligne = $requete->fetch();

	echo "<select>";
	while ($ligne != false)
	{
		echo '<option>'.$ligne['nomHotel']. ' ' . $ligne['departementHotel'] . '</option>';
		$ligne = $requete->fetch();
	}
	echo "</select>";
}

if(isset($_FILES['photoActivite']))
{ 
	include("../conf/accesBDD.php");

	$nomActivite = $_POST['nomActivite'];
	$tarifActivite = $_POST['tarifActivite'];
	$descriptionActivite = $_POST['descriptionActivite'];


     $fichier = basename($_FILES['photoActivite']['name']);
     if(move_uploaded_file($_FILES['photoActivite']['tmp_name'], "../images/activite/".$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $requete = $connexion->prepare("INSERT INTO activites (nomActivite, tarifActivite, descriptionActivite, imageActivite) VALUES ('$nomActivite', '$tarifActivite', '$descriptionActivite', '$fichier')");
		  $requete->execute(array());

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}

?>