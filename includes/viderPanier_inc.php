<?php
session_start();
require"db_handle_inc.php";

$current_panier=$_SESSION['id_panier'];

//Vider les achats qui sont associés au panier, puis le panier 
$sql="DELETE FROM achats WHERE id_panier=$current_panier";

$stmt=mysqli_stmt_init($db_connect);


	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../panier.php.php?error=sqlerror");
		exit();
	}

	else{

		if(mysqli_query($db_connect,$sql)){
			//Puis vider le panier
			$sql2="UPDATE panier SET prix_total=0, quantite_totale=0 WHERE id_panier=$current_panier";
			if(mysqli_query($db_connect,$sql2)){
				header("Location: ../panier.php?viderpanier=success");
				exit();

			}
			else{
				header("Location: ../panier.php?error=panierdejavide");
				exit();
			}
		}
		else{
			header("Location: ../panier.php?achats=nontrouves");
			exit();
		}

	}

?>