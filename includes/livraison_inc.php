<?php

	session_start();

	if(!isset($_SESSION['username_client'])){
		header("Location: ../panier.php?error=noUser");
		exit();
	}

	else{
		header("Location: ../livraison.php?livraison=success");
		exit();
	}



?>