<?php
require"db_handle_inc.php";

	session_start();

	//Detruire les variables de session
	session_unset();

	//Fermer la session
	session_destroy();

	//Fermer la bdd
	mysqli_close($db_connect);

	//Rediriger vers l'accueil
	header("Location: ../accueil.php?logout=success");



?>