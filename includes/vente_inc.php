<?php


session_start();

	require"db_handle_inc.php";


		$vendeur=$_SESSION['username_vendeur'];


if(isset($_POST['afficher_submit'])){
						$sql4="SELECT * FROM items WHERE username_vendeur='$vendeur'";
						$stmt=mysqli_stmt_init($db_connect);

							if(!mysqli_stmt_prepare($stmt,$sql4)){
						header("Location: ../vente.php?error=noOrderFound");
						exit();
						}	

						else{
							$resultat4=mysqli_query($db_connect, $sql4);

							$i=1;

							while($data4=mysqli_fetch_array($resultat4)){
								$items_array = array('id_item' =>$data4['id_item'],
								 'nom_item'=>$data4['nom_item'],
								 'categorie'=>$data4['categorie'],
								 'prix'=>$data4['prix'],
								 'modele'=>$data4['modele'],
								 'description'=>$data4['description']);

								$_SESSION['items'][$i]=$items_array;
								$i++;
								
							}
						}
						header("Location: ../vente.php?vosventes"); 
						exit();
					}

if(isset($_POST['suppr_submit'])){
	$supprimer_item=$_POST['suppr_submit'];

	$sqlsuppr ="DELETE from `items` WHERE id_item='$supprimer_item'";
	$vendeursuppr = "SELECT username_vendeur FROM items WHERE id_item='$supprimer_item'";
	$stmt=mysqli_stmt_init($db_connect);

	if(!mysqli_stmt_prepare($stmt,$vendeursuppr)){
			header("Location: ../vente.php?error=failed");
			exit();
		}
		else{
			//EXecution de la requete
			if(mysqli_query($db_connect,$vendeursuppr)){
			$test=mysqli_query($db_connect,$vendeursuppr);
			$test2=mysqli_fetch_array($test);
			}
		}

	if($test2[0]==$_SESSION['username_vendeur'])	
	{
			if(!mysqli_stmt_prepare($stmt,$sqlsuppr)){
			header("Location: ../vente.php?error=sqlerror");
			exit();
		}
		else{
			//EXecution de la requete
			if(mysqli_query($db_connect,$sqlsuppr)){
			header("Location: ../vente.php?delete=success");
			exit();
			}
		}
	}
	else{
		header("Location: ../vente.php?wrongowner");
			exit();
	}

}


if(isset($_POST['item_submit'])){


	$nom_item=isset($_POST['nom_item'])? $_POST['nom_item']:"";
	$categorie=isset($_POST['categorie'])? $_POST['categorie']:"";
	$description=isset($_POST['description'])? $_POST['description']:"";
	$modele=isset($_POST['modele'])? $_POST['modele']:"";
	$prix=isset($_POST['prix'])? $_POST['prix']:"";


		if(empty($nom_item) || empty($prix) || empty($categorie) || empty($description))	{
		header("Location: ../vente.php?error=emptyfields"); 
		exit();
	}


//Formulaire invalide si...
	//Un des champs obligatoires est vide


//Ajouter à la database si formulaire correct

		$sql="INSERT INTO `items`(`nom_item`,`categorie`,`description`,`modele`,`prix`,`username_vendeur`) VALUES ('$nom_item','$categorie','$description','$modele','$prix','$vendeur')";
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