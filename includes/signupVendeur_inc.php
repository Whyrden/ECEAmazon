<?php

if(isset($_POST['signupVendeur_submit'])){

		require"db_handle_inc.php";

	$identifiant=isset($_POST['identifiant'])? $_POST["identifiant"]:"";
	$mail=isset($_POST['mail'])? $_POST["mail"]:"";
	$password=isset($_POST['password'])? $_POST["password"]:"";
	$confirm_password=isset($_POST['confirm_password'])? $_POST["confirm_password"]:"";
	$nom=isset($_POST['nom'])? $_POST["nom"]:"";
	$prenom=isset($_POST['prenom'])? $_POST["prenom"]:"";
	$description=isset($_POST['description'])? $_POST["description"]:"";

//Formulaire invalide si...
	//Un des champs obligatoires est vide
	if(empty($identifiant) || empty($mail) || empty($password) || empty($confirm_password) || empty($nom) || empty($prenom)){
		header("Location: ../signupVendeur.php?error=emptyfields&identifiant".$identifiant."$mail=".$mail); 
		exit();
	}

	//Le champ est mail est incorrect, renvoyer alors les autres champs pour ne par les retaper puisqu'ils sont corrects
	else if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signupVendeur.php?error=invalidmail&identifiant".$identifiant."$nom=".$nom."$prenom=".$prenom);
		exit();
	}

	//Les mdp rentrés ne sont pas les mêmes 
	else if($password!=$confirm_password){
		header("Location: ../signupVendeur.php?error=passwordcheck&identifiant".$identifiant."$nom=".$nom."$mail=".$mail."$prenom=".$prenom);
		exit();
	}

//Ajouter à la database si formulaire correct
	else{

		//Si l'username exist, renvoyer à singupvendeur.php
		$sqlCheck="SELECT username_vendeur FROM vendeurs WHERE username_vendeur='$identifiant'";
		$stmt=mysqli_stmt_init($db_connect);

			if(!mysqli_stmt_prepare($stmt,$sqlCheck)){
				header("Location: ../signupVendeur.php?error=sqlerror");
				exit();

			}
			else{
				$resultat=mysqli_query($db_connect, $sqlCheck);
				if($data=mysqli_fetch_assoc($resultat)){
					header("Location: ../signupVendeur.php?error=existingUser");
					exit();
				}
			}

		$sql="INSERT INTO `vendeurs`(`username_vendeur`,`password`,`email`,`nom`,`prenom`,`description`,`photo_profil`,`photo_fond`) VALUES ('$identifiant','$password','$mail','$nom','$prenom','$description','boy.png','boy.png')";


		//EXecution de la requete
		if(mysqli_query($db_connect,$sql)){
			header("Location: ../signupVendeur.php?signupVendeur=success");
			exit();
			
		}
		else{
			header("Location: ../signupVendeur.php?signupVendeur=fail");
			exit();
		}

	}
}

else{
	header("Location: ../signupVendeur.php");
	exit();
}
	

?>