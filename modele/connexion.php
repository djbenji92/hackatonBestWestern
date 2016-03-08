<?php


include("../conf/accesBDD.php");

$username = $_POST['username'];
$password = $_POST['password'];

$salt = "fojeizifoezjz";
$mdp = sha1($username.$salt.$password);

$listeUtilisateur = $connexion->prepare("SELECT * from clients where email =  '$username' AND mdpEmail = '$mdp'");
$listeUtilisateur->execute();
$countUsername = $listeUtilisateur->rowCount();

if($countUsername == 0)
{
	echo "Erreur d'authentification";
}


else {
	session_start();
	$_SESSION['user']=$username;
	echo "Connexion réussi !";
}


?>