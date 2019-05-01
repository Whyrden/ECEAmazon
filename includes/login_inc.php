<?php

if(isset($_POST['login_submit'])){
	require"db_handle_inc.php";

	$identifiant=isset($_POST['identifiant'])?$_POST['identifiant']:"";
	$password=isset($_POST['password'])?$_POST['password']:"";

	
	if(empty($identifiant) || empty($password)){
		header("Location: ../login.php?error=emptyfields&identifiant".$identifiant); 
		exit();
	}

	else{
		$hashedPsw=password_hash($password,PASSWORD_DEFAULT);

		//Vérifier si l'id est retrouvé dans les différentes tables en fonction du statut de l'utilisateur
		if(isset($_POST['loginAcheteur'])){
		$sql="SELECT * FROM clients WHERE username_client='$identifiant' AND password='$password'";
		}

		if(isset($_POST['loginVendeur'])){
		$sql="SELECT * FROM vendeurs WHERE username_vendeur='$identifiant' AND password='$password'";
		}

		if(isset($_POST['loginAdmin'])){
		$sql="SELECT * FROM admin WHERE username_admin='$identifiant' AND password='$password'";
		}

		$stmt=mysqli_stmt_init($db_connect);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../login.php?error=sqlerror");
			exit();

		}

		else{
			//Relier les saisies utilisateur (identifiant) à la bdd (stmt)
			$resultat=mysqli_query($db_connect, $sql);
			

			if($data=mysqli_fetch_assoc($resultat)){


				//Ouvrir une session
				session_start();
				if(isset($_POST['loginAcheteur'])){

				//Declaration des variables de session
				$_SESSION['username']=$data['username_client'];
				$_SESSION['nom']=$data['nom'];
				$_SESSION['prenom']=$data['prenom'];
				$_SESSION['naissance']=$data['date_naissance'];
				$_SESSION['email']=$data['email'];
				$_SESSION['adresse']=$data['adresse1'];
				$_SESSION['codePostal']=$data['code_postal'];
				$_SESSION['ville']=$data['ville'];
				$_SESSION['pays']=$data['pays'];
				$_SESSION['telephone']=$data['telephone'];
			}

			else if(isset($_POST['loginVendeur'])){
				$_SESSION['username']=$data['username_vendeur'];
				$_SESSION['nom']=$data['nom'];
				$_SESSION['prenom']=$data['prenom'];
				$_SESSION['email']=$data['email'];
			}
			else if(isset($_POST['loginAdmin'])){
				$_SESSION['username']=$data['username_admin'];
				$_SESSION['nom']=$data['nom'];
				$_SESSION['prenom']=$data['prenom'];
			}

				header("Location: ../accueil.php?login=loginsuccess");
				exit();
			}
			else{
				header("Location: ../login.php?error=incorrectInfo");
				exit();

			}
		}
	}

}

else{
	header("Location: ../login.php");
	exit();
}

?>