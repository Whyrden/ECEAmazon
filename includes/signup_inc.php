<?php

if(isset($_POST['signup_submit'])){

		require"db_handle_inc.php";

	$identifiant=isset($_POST['identifiant'])? $_POST["identifiant"]:"";
	$mail=isset($_POST['mail'])? $_POST["mail"]:"";
	$password=isset($_POST['password'])? $_POST["password"]:"";
	$confirm_password=isset($_POST['confirm_password'])? $_POST["confirm_password"]:"";
	$adresse=isset($_POST['adresse'])? $_POST["adresse"]:"";
	$nom=isset($_POST['nom'])? $_POST["nom"]:"";
	$prenom=isset($_POST['prenom'])? $_POST["prenom"]:"";
	$dateNaissance=isset($_POST['dateNaissance'])? $_POST["dateNaissance"]:"";
	$pays=isset($_POST['pays'])? $_POST["pays"]:"";
	$codePostale=isset($_POST['codePostale'])? $_POST["codePostale"]:"";
	$ville=isset($_POST['ville'])? $_POST["ville"]:"";
	$portable=isset($_POST['portable'])? $_POST["portable"]:"";

//Formulaire invalide si...
	//Les champs suivants sont pas vides
	if(empty($identifiant) || empty($mail) || empty($password) || empty($confirm_password) || empty($nom) || empty($prenom) || empty($portable) || empty($pays)){
		header("Location: ../signup.php?error=emptyfields&identifiant".$identifiant."$mail=".$mail); 
		exit();
	}

	//Le champ est mail est incorrect, renvoyer alors les autres champs pour ne par les retaper puisqu'ils sont correct
	else if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidmail&identifiant".$identifiant."$nom=".$nom."$prenom=".$prenom."$portable=".$portable);
		exit();
	}

	else if($password!=$confirm_password){
		header("Location: ../signup.php?error=passwordcheck&identifiant".$identifiant."$nom=".$nom."$mail=".$mail."$prenom=".$prenom."$portable=".$portable);
		exit();
	}

//Ajouter à la database si formulaire correct
	else{


		

	}

}

else{
	header("Location: ../signup.php");
	exit();
}
	

?>
