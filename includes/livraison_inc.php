<?php

	session_start();

	if(isset($_POST['order']) && isset($_SESSION['username_client'])){
		$current_username=$_SESSION['username_client'];

		require"db_handle_inc.php";
		//Verifier que tous les champs sont correctement rentrés
		if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adresse1']) || empty($_POST['code_postal']) || empty($_POST['ville']) || empty($_POST['pays']) || empty($_POST['telephone'])){
			header("Location: ../livraison.php?erorr=emptyfields");
			exit();

			//Vérifier les coordonnées de la carte 
			//Selectionner la carte du client depuis la bdd
			$sql="SELECT * FROM carte_bancaire WHERE username_client='$current_username'";
			
		}

	}

	else{
		//header("Location: ../panier.php?error=unknown");
		//exit();
	}



?>