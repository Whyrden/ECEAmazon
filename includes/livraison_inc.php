<?php

	session_start();

	$quantite_totale=$_SESSION['quantite_totale'];
	$prix_total=$_SESSION['prix_total'];

	//Si non connecté, renvoyer au panier et inviter à se co
	if(!isset($_SESSION['username_client'])){
		header("Location: ../panier.php?error=noUser");
		exit();
	}

	else if(isset($_SESSION["username_client"]) && $quantite_totale<=0 && $prix_total<=0){
		header("Location:../panier.php?error=emptyCart");
		exit();
	}

	//Si le client est identifié et appuie sur commander
	else if(isset($_POST['order']) && isset($_SESSION['username_client'])){
		$current_username=$_SESSION['username_client'];
		$current_panier=$_SESSION['id_panier'];

		require"db_handle_inc.php";
		//Verifier que tous les champs sont correctement rentrés
		if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adresse1']) || empty($_POST['code_postal']) || empty($_POST['ville']) || empty($_POST['pays']) || empty($_POST['telephone'])){
			header("Location: ../livraison.php?erorr=emptyfields");
			exit();
		}

		if(empty($_POST['numberCard']) || empty($_POST['exp']) || empty($_POST['crypto'])){
			header("Location: ../livraison.php?erorr=cardInfosEmpty");
			exit();

		}


				$cardNumber=$_POST['numberCard'];
				$exp=$_POST['exp'];
				$code=$_POST['crypto'];

				//Vérifier les coordonnées de la carte 
				//Selectionner la carte du client depuis la bdd
				$sql="SELECT * FROM carte_bancaire WHERE username_client='$current_username'";
				$stmt=mysqli_stmt_init($db_connect);


				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../livraison.php.php?error=sqlerror");
					exit();
				}
				else{

					//EXecution de la requete
					$resultat=mysqli_query($db_connect,$sql);
					if($data=mysqli_fetch_assoc($resultat)){
						if($cardNumber==$data['numero'] && $code==$data['code'] && $exp=$data['expiration']){



							//Mettre à jour le nbr de ventes puis vider le panier du client
							$sql="UPDATE achats,items SET items.nb_ventes=items.nb_ventes+achats.quantite WHERE items.nom_item=achats.nom_item AND achats.id_panier='$current_panier'";

							if(!mysqli_query($db_connect,$sql)){
								header("Location: ../livraison.php?error=nb_ventesnotupdated");
								exit();
								
							}
							else{ 
								$sql2="UPDATE panier SET quantite_totale=0, prix_total=0 WHERE id_panier=$current_panier";
								if(mysqli_query($db_connect,$sql2)){

									//suppression du panier
									$sql3="DELETE FROM achats WHERE id_panier='$current_panier'";

									if(!mysqli_query($db_connect,$sql3)){
										header("Location: ../livraison.php?error=cartNotEmptied");
										exit();

									}

									else{
										header("Location: ../validationCommande.php");
										exit();
									}
								}

								else{
									header("Location: ../livraison.php?error=cartNotreinit");
									exit();
								}

							}
							

						}//end Verif des données
						else{
							header("Location: ../livraison.php?error=wrongCardInfo");
							exit();
						}//end if wrong card infos
					}//

					else{
						header("Location: ../livraison.php?error=cardNotFound");
						exit();
					}

					
				}//end if requete executed
			
		}

	//Si il est co, le renvoyer sur sa page de livraison
	else if(isset($_SESSION['username_client'])){
		header("Location: ../livraison.php?chargementLivraison");
		exit();
	}


?>