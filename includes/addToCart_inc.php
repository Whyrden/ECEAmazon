<?php

//Charger le panier courant
require"charger_panier_inc.php";

		if(isset($_POST['addToCart'])){
			$current_panier=$_SESSION['id_panier']; 
			if(isset($_POST['nom_item']) && isset($_POST['prix']) && isset($_POST['categorie']) && isset($_POST['quantite']) && isset($_POST['image'])){
				$nom_item=$_POST['nom_item'];
				$prix=$_POST['prix'];
				$categorie=$_POST['categorie'];
				$quantite=$_POST['quantite'];
				$image=$_POST['image'];
			}

			else{
				header("Location: ../market.php?champsItem=empty");
				exit();
			}

				
			$id=0;
			$sql="SELECT id_achat FROM achats WHERE id_achat=$id";
			$stmt=mysqli_stmt_init($db_connect);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../market.php?error=sqlerror");
				exit();
			}//endif

			else{
				$resultat=mysqli_query($db_connect,$sql);
				while($data=mysqli_fetch_assoc($resultat)){
					$id=rand(1,1000);
				}
			}



			//Ajout d'une commande dans le panier
			//Attention le prix d'un achat est le prix de l'item fois sa quantité selectionnée
			$sql1="INSERT INTO achats (`id_achat`,`nom_item`,`quantite`,`prix`,`categorie`,`id_panier`,`image`) VALUES($id,'$nom_item',$quantite,$quantite*$prix,'$categorie',$current_panier,'$image')";

			if(mysqli_query($db_connect,$sql1)){

				//Mettre à jour le panier avec la quantité et le prix
				if(isset($_SESSION['achats'])){
						$total_panier=0;
						$total_quantite=0;
						foreach ($_SESSION['achats']as $key => $values) {
							$total_panier+=$values['prix_commande'];
							$total_quantite+=$values['quantite'];

						}

								//Puis mettre à jour le prix total et la quantité totale du panier
								$sql5="UPDATE panier SET prix_total='$total_panier', quantite_totale='$total_quantite' WHERE id_panier='$current_panier'";


								if(!mysqli_stmt_prepare($stmt,$sql5)){
									header("Location: ../market.php?error=errorsql");
									exit();
									}//end if

								else{

										//Execution de la requête
										if(mysqli_query($db_connect,$sql5)){
										$_SESSION['prix_total']=$total_panier;
										$_SESSION['quantite_totale']=$total_quantite;
										}//end if
										else{
											header("Location: ../market.php?panier=prixAndQuantiteNotUpdated");
											exit();

										}


									}//end else

								}//end if $_SESSION['achats'] not empty

							else{
								header("Location: ../market.php?error=nopanier");
								exit();

							}

							header("Location: ../market.php?addToCart=success");
							exit();
				

			}
			else{
				header("Location: ../market.php?error=insertToAchatsFail");
				exit();
			

			}
			
		}

		else if(!isset($_POST['addToCart'])){
			header("Location: ../market.php?addToCart=fail");
			exit();

		}


?>