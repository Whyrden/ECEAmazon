<?php
	
	require 'db_handle.php';
if(isset($_POST["signup_submit"])){

	require 'db_handle.php';


	$username=$_POST["username"];
	$mail=$_POST["mail"];
	$password=$_POST["password"];
	$confirm_password=$_POST["confirm_password"];

	if(empty($username)|| empty($mail)|| empty($password)|| empty($confirm_password)){
		header("Location :../signup.php?error=emptyfields&".$username."$mail=".$mail); //Lorsqu'il y a une erreur de remplissage, par ex numéro erroné, type de mdp incorrect et que l'utilisateur submit, les données saisies auparavant seront retournées à la page du formulaire et conservées.
		exit();

		print("Un des champs est vide");
	}

}
else{
	print("error");
}
