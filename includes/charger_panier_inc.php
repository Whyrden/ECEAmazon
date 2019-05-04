<?php

//chargement du panier (s'il existe) du client et du compte random s'il n'est pas connecté
session_start();
require"db_handle_inc.php";

if(isset($_SESSION['username_client'])){
	
	$current_username1=$_SESSION['username_client'];
}
else if(!isset($_SESSION['username_client']) && !isset($_SESSION['username_vendeur']) && !isset($_SESSION['username_admin'])){
	$current_username1='tampon';
}
else{
	header("Location: ../accueil.php?error=noCartFound");
	exit();
}

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
						$_SESSION['quantite_totale']=$data3['quantite_totale'];
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
								$achat_array = array('id_achat' =>$data4['id_achat'],
								 'nom_item'=>$data4['nom_item'],
								 'quantite'=>$data4['quantite'],
								 'prix_commande'=>$data4['prix'], //Prix d'une commande/achat =prix d'un article*quantité
								 'categorie'=>$data4['categorie'],
								 'id_panier'=>$data4['id_panier']);

								$_SESSION['achats'][$i]=$achat_array;
								$i++;
								
							}							

						}//end else $sql4 exécutée 

						//Mettre à jour le panier avec la quantité et le prix
					if(!empty($_SESSION['achats'])){
						$total_panier=0;
						$total_quantite=0;
						foreach ($_SESSION['achats']as $key => $values) {
							$total_panier+=$values['prix_commande'];
							$total_quantite+=$values['quantite'];

						}

								//Puis mettre à jour le prix total et la quantité totale du panier
								$sql5="UPDATE panier SET prix_total='$total_panier', quantite_totale='$total_quantite' WHERE id_panier='$current_panier'";


								if(!mysqli_stmt_prepare($stmt,$sql5)){
									header("Location: ../panier.php?error=errorsql");
									exit();
									}//end if $sql5 executée

								else{

										//Execution de la requête
										if(mysqli_query($db_connect,$sql5)){
										$_SESSION['prix_total']=$total_panier;
										$_SESSION['quantite_totale']=$total_quantite;
										}//end if
										else{
											header("Location:../panier.php?panier=prixAndQuantiteNotUpdated");
											exit();

										}


									}//end else $sql5 non executée

								}//end if $_SESSION['achats'] not empty

								else if(empty($_SESSION['achats'])){
									header("Location: ../panier.php?achats=vide");

								}


							}


