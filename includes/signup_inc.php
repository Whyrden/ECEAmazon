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
	$portable=isset($_POST['portable'])? $_POST["portable"]:"";
	$dateNaissance=isset($_POST['dateNaissance'])? $_POST["dateNaissance"]:"";

	$pays=isset($_POST['pays'])? $_POST["pays"]:"";

	if(isset($_POST['codePostale'])) {
		$codePostale=$_POST['codePostale'];
	}
	else{
		$codePostale=00000;

	}
	$ville=isset($_POST['ville'])? $_POST["ville"]:"";
	

//Formulaire invalide si...
	//Un des champs obligatoires est vide
	if(empty($identifiant) || empty($mail) || empty($password) || empty($confirm_password) || empty($nom) || empty($prenom) || empty($portable) || empty($dateNaissance)){
		header("Location: ../signup.php?error=emptyfields&identifiant".$identifiant."$mail=".$mail); 
		exit();
	}

	//Le champ est mail est incorrect, renvoyer alors les autres champs pour ne par les retaper puisqu'ils sont corrects
	else if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidmail&identifiant".$identifiant."$nom=".$nom."$prenom=".$prenom."$portable=".$portable);
		exit();
	}

	//Les mdp rentrés ne sont pas les mêmes 
	else if($password!=$confirm_password){
		header("Location: ../signup.php?error=passwordcheck&identifiant".$identifiant."$nom=".$nom."$mail=".$mail."$prenom=".$prenom."$portable=".$portable);
		exit();
	}

//Ajouter à la database si formulaire correct
	else{

		//Si l'username exist, renvoyer à singup.php
		$sqlCheck="SELECT username_client FROM clients WHERE username_client='$identifiant' ";
		$stmt=mysqli_stmt_init($db_connect);

			if(!mysqli_stmt_prepare($stmt,$sqlCheck)){
				header("Location: ../signup.php?error=sqlerror");
				exit();

			}
			else{
				$resultat=mysqli_query($db_connect, $sqlCheck);
				if($data=mysqli_fetch_assoc($resultat)){
					header("Location: ../signup.php?error=existingUser");
					exit();
				}
			}

			//Ajout dans la table clients
			$sql="INSERT INTO `clients`(`username_client`,`password`,`email`,`telephone`,`nom`,`prenom`,`pays`,`ville`,`code_postal`,`date_naissance`,`adresse1`) VALUES ('$identifiant','$password','$mail','$portable','$nom','$prenom','$pays','$ville','$codePostale','$dateNaissance','$adresse')";


			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../signup.php?error=sqlerrooor");
				exit();
			}//endif
			else{

				//EXecution de la requete
				if(!mysqli_query($db_connect,$sql)){
				header("Location: ../signup.php?error=notAddedToDB");
				exit();

				}
							
			}//endelse

			//Crée un panier aussi (pour l'id, on prend un aléatoire)

			$id=0;
			$sql="SELECT id_panier FROM panier WHERE id_panier=$id";
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../signup.php?error=idPaniernotfound");
				exit();
			}//endif

			else{
				$resultat=mysqli_query($db_connect,$sql);
				while($data=mysqli_fetch_assoc($resultat)){
					$id=rand(1,1000);
				}
			}
			

			//Puis inserer l'id dans le panier fraîchement crée
			$sql6="INSERT INTO `panier`(`id_panier`,`username_client`) VALUES('$id','$identifiant')";

			if(mysqli_query($db_connect,$sql6)){
				header("Location: ../signup.php?signup=success");
				exit();
			}
			else{
				header("Location: ../signup.php?error=creationPanierFail");
				exit();

			}

		
	

	}

}

else{
	header("Location: ../signup.php");
	exit();
}
	

?>
