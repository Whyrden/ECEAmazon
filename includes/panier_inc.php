<?php
//Appelé lorsque le client appuie sur panier
//chargement du panier du client
session_start();

if(isset($_SESSION['username_client'])){
	require"db_handle_inc.php";

	$current_username1=$_SESSION['username_client'];

	//Recuperer les infos du panier aussi
				$sql3="SELECT * FROM panier WHERE username_client='$current_username1'";
				$stmt=mysqli_stmt_init($db_connect);

				if(!mysqli_stmt_prepare($stmt,$sql3)){
				header("Location: ../panier.php?error=noCartFound");
				exit();
					}

				else{
					
					$resultat3=mysqli_query($db_connect, $sql3);
					if($data3=mysqli_fetch_assoc($resultat3)){
						$_SESSION['id_panier']=$data3['id_panier'];
						$current_panier=$_SESSION['id_panier'];

						$_SESSION['proprietaire']=$data3['username_client'];
						$_SESSION['prix_total']=$data3['prix_total'];
						}	

						//Puis charger toutes les commandes qui sont associées au panier trouvé
						$sql4="SELECT * FROM achats WHERE id_panier='$current_panier'";

						if(!mysqli_stmt_prepare($stmt,$sql4)){
						header("Location: ../panier.php?error=noOrderFound");
						exit();
						}	

						else{
							$resultat4=mysqli_query($db_connect, $sql4);

							$i=1;

							while($data4=mysqli_fetch_array($resultat4)){
								$_SESSION['id_achat']=$data4['id_achat'];
								$_SESSION['nom_item']=$data4['nom_item'];
								$_SESSION['quantite']=$data4['quantite'];
								$_SESSION['prix_commande']=$data4['prix'];
								$_SESSION['categorie']=$data4['categorie'];
								$_SESSION['id_panier']=$data4['id_panier'];
								$i++;
							}


							header("Location: ../panier.php?panier=success");
							exit();


						}


					}
	}

//Associerle panier à une entité random si l'utilisateur n'est pas connecté ou n'a pas de compte
else{
	header("Location: ../panier.php?error=noUser");
	exit();

}

