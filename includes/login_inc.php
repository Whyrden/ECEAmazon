    
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
				$_SESSION['username_client']=$data['username_client'];
				$current_username=$_SESSION['username_client'];
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
				$sql2="SELECT * FROM carte_bancaire WHERE username_client='$current_username'";			
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
					
					} //End if loginacheteur
				else if(isset($_POST['loginVendeur'])){
					$_SESSION['username_vendeur']=$data['username_vendeur'];
					$current_username=$_SESSION['username_vendeur'];
					$_SESSION['nom']=$data['nom'];
					$_SESSION['prenom']=$data['prenom'];
					$_SESSION['email']=$data['email'];
					$_SESSION['photo_profil']=$data['photo_profil'];
					$_SESSION['image_fond']=$data['image_fond'];
				}//end else if loginvendeur
				else if(isset($_POST['loginAdmin'])){
					$_SESSION['username_admin']=$data['username_admin'];
					$_SESSION['nom']=$data['nom'];
					$_SESSION['prenom']=$data['prenom'];
				}//end else if loginAdmin
				else{
					header("Location: ../login.php?error=incorrectInfo");
					exit();
				}//end othercase
				header("Location: ../accueil.php?login=loginsuccess");	
				exit();
		}//end if data fetch result
		else{
					header("Location: ../login.php?error=incorrectInfo");
					exit();
				}//end if data fetch result==false
	}//end if mysqli_stmt_prepare==false
}
}
else{
	header("Location: ../login.php");
	exit();
}
?>