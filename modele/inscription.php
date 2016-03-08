<?php


include("../conf/accesBDD.php");
//ini_set('display_errors', 1);
$username = $_POST['username'];
$password = $_POST['password'];
$random = $_POST['random'];



$listeUtilisateur = $connexion->prepare("select * from clients where email =  '$username'");
$listeUtilisateur->execute();
$countUsername = $listeUtilisateur->rowCount();

if($countUsername == 0)
{
	$listeUtilisateur = $connexion->prepare("select * from clients where email =  '$username'");
	$listeUtilisateur->execute();
	$countUsername = $listeUtilisateur->rowCount();
}


if($countUsername > 0) {
	$erreur = "Un utilisateur sous cette adresse mail existe déja !";
	$class= "erreur";
	echo $erreur;
}
else if($username == ""){
	$erreur = "Le champ utilisateur est vide !";
	echo $erreur;
}
else{
	//enregistrer l'utilisateur
	$salt = "fojeizifoezjz";
	$mdp = sha1($username.$salt.$password);
	$requete = $connexion->prepare("INSERT INTO clients (email, mdpEmail, numeroClient) VALUES ('$username', '$mdp', $random)");
	//$requete->execute(array());
	$requete->execute(array());

	session_start();
	$_SESSION['user']=$username;
	echo 'Felicitation vous etes bien inscrit !';
}

?>