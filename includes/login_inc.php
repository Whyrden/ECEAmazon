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
		//Vérifier si l'id est retrouvé dans la bdd
		$sql="SELECT * FROM users WHERE uidUsers=? OR email=?;";
		$stmt=mysqli_stmt_init($db_connect);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../login.php?error=sqlerror");
			exit();

		}

		else{
			//Relier les saisies utilisateur (identifiant) à la bdd (stmt)
			$resultat=mysqli_query($db_connect, $sql);

			if($data=mysqli_fetch_assoc($resultat)){

				//Vérifier si le mdp est retrouvé dans la bdd
				$pswCheck=password_verify($password,$data['password']);
				//Si non, retourner à la page précédente avec un msg d'erreur
				if(!$pswCheck){
					header("Location: ../login.php?error=wrongpsw");
					exit();
				}

				//Si oui, ouvrir une session
				else if($pswCheck){
					session_start();
					$_SESSION['username']=$data['username_client'];
					$_SESSION['username']=$data['password'];

					header("Location: ../login.php?login=success");
					exit();
				}

				//On sait jamais ce qui peut arriver! On est safe comme ça
				else{
					header("Location: ../login.php?error=wrongpsw");
					exit();

				}



			}
			else{
				header("Location: ../login.php?error=sqlerror");
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