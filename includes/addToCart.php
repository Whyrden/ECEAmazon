<?php

//Ajouter au panier. En réalité, on crée un achat qui sera associé au panier 
session_start();

if(isset($_POST['addToCart'])){
	require"db_handle_inc.php";

	//Recuperer les champs de l'item selectionné
	$nom_item=$_POST['nom_item'];



		$id=0;
		$sql="SELECT id_achat FROM achats WHERE id_achat=$id AND nom_item";
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}//endif

		else{
			$resultat=mysqli_query($db_connect,$sql);
			while($data=mysqli_fetch_assoc($resultat)){
				$id=rand(1,1000);
			}
		}

	//Si pas d'utilisateur connecté, ajouter dans un panier random, tampon. Une fois qu'il est co, écraser son ancien panier ou crée un s'il en pas.
	// S'il est inscrit, crée un nouveau panier 
	if(!isset($_SESSION['username_client'])){
		$sql="INSERT INTO `panier`(``)";
		

	}


	else{

	}

	
	
}


?>