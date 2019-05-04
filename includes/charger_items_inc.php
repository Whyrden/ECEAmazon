<?php

//Chargement des items dans la page des ventes 
session_start();
require"db_handle_inc.php";

$sql="SELECT * FROM items";

$resultat=mysqli_query($db_connect,$sql);

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

	foreach ($_SESSION['items'] as $key => $value) {
		echo $value['image'];
		
		}
}

else{
	exit();
}

?>