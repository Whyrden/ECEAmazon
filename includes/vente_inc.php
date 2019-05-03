<?php
session_start();

if(isset($_POST['item_submit'])){

		require"db_handle_inc.php";

	$nom_item=isset($_POST['nom_item'])? $_POST['nom_item']:"";
	$categorie=isset($_POST['categorie'])? $_POST['categorie']:"";
	$description=isset($_POST['description'])? $_POST['description']:"";
	$modele=isset($_POST['modele'])? $_POST['modele']:"";
	$prix=isset($_POST['prix'])? $_POST['prix']:"";
//Formulaire invalide si...
	//Un des champs obligatoires est vide


//Ajouter à la database si formulaire correct

		$sql="INSERT INTO `items`(`nom_item`,`categorie`,`description`,`modele`,`prix`) VALUES ('$nom_item','$categorie','$description','$modele','$prix')";
		$stmt=mysqli_stmt_init($db_connect);


		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../vente.php?error=sqlerror");
			exit();
		}
		else{

			//EXecution de la requete
			if(mysqli_query($db_connect,$sql)){
			header("Location: ../vente.php?envente=success");
			exit();
		}

				

		
		}


}

else{
	header("Location: ../vente.php?error=nodetect");
	exit();
}	

?>