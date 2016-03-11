<?php
	include("../conf/accesBDD.php");


	$user = mysql_escape_string($_POST["user"]);
	$id = $_POST['id'];
	$avis = mysql_escape_string($_POST['avis']);
	$datePost = date("d/m/y");

	echo $user . ' ';
	echo $avis . ' ';
	echo $datePost . ' ';
	echo $id;

	$requete = $connexion->prepare("INSERT INTO avisActivite (avis, idActivite, user, dateAvis) VALUES ('$avis', '$id', '$user', '$datePost')");
	$requete->execute(array());

	echo $id;

	//header('Location: activite.php?id='.$id);
?>