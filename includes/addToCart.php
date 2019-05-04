<?php

//Charger le panier courant
require"charger_panier_inc.php";

	//Ajout d'item si l'utilisateur est co et a un panier valide
		$current_panier=$_SESSION['id_panier']; 
		$current_item_name;
		$current_item_price;

				
			$id=0;
			$sql="SELECT id_achat FROM achats WHERE id_achat=$id";
			$stmt=mysqli_stmt_init($db_connect);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../livres.php?error=sqlerror");
				exit();
			}//endif

			else{
				$resultat=mysqli_query($db_connect,$sql);
				while($data=mysqli_fetch_assoc($resultat)){
					$id=rand(1,1000);
				}
			}


			$sql1="INSERT INTO achats (`id_achat`,`nom_item`,`quantite`,`prix`,`categorie`,`id_panier`) VALUES($id,'Harry Potter',1,5*1,'Fantastique',$current_panier)";

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
									header("Location: ../livres.php?error=errorsql");
									exit();
									}//end if

								else{

										//Execution de la requête
										if(mysqli_query($db_connect,$sql5)){
										$_SESSION['prix_total']=$total_panier;
										$_SESSION['quantite_totale']=$total_quantite;
										}//end if
										else{
											header("Location: ../livres.php?panier=prixAndQuantiteNotUpdated");
											exit();

										}


									}//end else

								}//end if $_SESSION['achats'] not empty

							else{
								header("Location: ../livres.php?panier=noPanier");
								exit();

							}

							header("Location: ../livres.php?addtocart=success");
							exit();
				

			}
			else{
				header("Location: ../livres.php?error=sqlerror");
				exit();
				echo "panier:".$current_panier;
			

			}



?>