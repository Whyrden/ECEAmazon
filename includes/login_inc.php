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

		else if(isset($_POST['loginVendeur'])){
		$sql="SELECT * FROM vendeurs WHERE username_vendeur='$identifiant' AND password='$password'";
		}

		else if(isset($_POST['loginAdmin'])){
		$sql="SELECT * FROM admin WHERE username_admin='$identifiant' AND password='$password'";
		}

		else{
			header("Location: ../login.php?error=noStatus");
			exit();
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

				//Declaration des variables de session (champs de l'utilisateur)
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



				//Recuperer les infos de la cb de l'utilisateur aussi
				$sql2="SELECT * FROM carte_bancaire WHERE username_client='$data['username_client']'";			
				if(!mysqli_stmt_prepare($stmt,$sql2)){
					header("Location: ../login.php?error=sqlerror");
					exit();
					}

				else{
					
					$resultat2=mysqli_query($db_connect, $sql2);

					if($data2=mysqli_fetch_assoc($resultat2)){
						$_SESSION['numero']=$data2['numero'];
						$_SESSION['type']=$data2['type'];
						$_SESSION['expiration']=$data2['expiration'];
						$_SESSION['code']=$data2['code'];
						$_SESSION['proprietaire']=$data2['username_client'];

						}	

					}

					//Recuperer les infos du panier aussi
					$sql3="SELECT * FROM panier WHERE username_client='Wyrden'";
					if(!mysqli_stmt_prepare($stmt,$sql2)){
					header("Location: ../login.php?error=sqlerror");
					exit();
					}

					else{
						$resultat3=mysqli_query($db_connect,$sql3);

						if($data3=mysqli_fetch_assoc($resultat3)){
						$_SESSION['Proprietaire']=$data2['username_client'];
						$_SESSION['Prix total']=$data3['prix_total'];

						}

					}




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