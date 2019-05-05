<?php


//Chargement des items dans la page des ventes en fonction des catégories et des modèles
session_start();
require"db_handle_inc.php";



if(isset($_POST['livre'])){
$sql="SELECT * FROM items WHERE categorie='livre' AND nb_ventes>=3";
}

else if(isset($_POST['musique'])){
$sql="SELECT * FROM items WHERE categorie='musique' AND nb_ventes>=3";
}

else if(isset($_POST['vetement'])){
$sql="SELECT * FROM items WHERE categorie='vetement' AND nb_ventes>=3 ";
}

else if(isset($_POST['sport'])){
$sql="SELECT * FROM items WHERE categorie='sport' AND nb_ventes>=3";
}


$resultat=mysqli_query($db_connect,$sql);
		$i=1;

if(mysqli_num_rows($resultat)>0){
	$i=1;

	while($data=mysqli_fetch_array($resultat)){
		$items_array=array('id_item' => $data['id_item'],
		'nom_item'=>$data['nom_item'],
		'image'=>$data['image'],
		'categorie'=>$data['categorie'],
		'description'=>$data['description'],
		'modele'=>$data['modele'],
		'prix'=>$data['prix'],
		'username_vendeur'=>$data['username_vendeur']);

		$_SESSION['items'][$i]=$items_array;
		$i++;

	}

	
		header("Location: ../ventesflash.php?chargement=".$item_categorie);
		exit();

}

else{
	header("Location: {$_SERVER['HTTP_REFERER']}?itemsvide!");
	exit();
}


					

?>