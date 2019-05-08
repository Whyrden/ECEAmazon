<?php


//Chargement des items dans la page des ventes en fonction des catégories et des modèles
session_start();
require"db_handle_inc.php";



//Puis charger toutes les commandes qui sont associées au panier trouvé
if(isset($_POST['livres'])){
$sql="SELECT * FROM items WHERE categorie='livre'";
$item_categorie='livres';
}

else if(isset($_POST['musiques'])){
$sql="SELECT * FROM items WHERE categorie='musique'";
$item_categorie='musiques';
}

else if(isset($_POST['vetements'])){
$sql="SELECT * FROM items WHERE categorie='vetement'";
$item_categorie='vetements';
}

else if(isset($_POST['sports'])){
$sql="SELECT * FROM items WHERE categorie='sport'";
$item_categorie='sports';
}


$resultat=mysqli_query($db_connect,$sql);
		$i=0;

if(mysqli_num_rows($resultat)>0){

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
	/*foreach ($_SESSION['items'] as $key => $value) {
		# code...
		echo "".$value['nom_item'];
		echo "".$value['id_item'];
	}*/
	
		header("Location: ../market.php?chargement=".$item_categorie);
		exit();

}

else{
	header("Location: {$_SERVER['HTTP_REFERER']}?itemsvide!");
	exit();
}


					

?>