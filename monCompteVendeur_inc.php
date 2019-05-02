<?php
session_start();

//enregistrement de l'image dans le dossier
if(isset($_FILES['photo_profil']['name'])){
//"images" = subdirectory for images in www directory
$target_dir = "img/photoprofil/";
$target_file = $target_dir . basename($_FILES["photo_profil"]["name"]);
$uploadOk = 1;

//file extension in lower case
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Vérifier si le fichier image est une image réelle ou une image fausse
if(isset($_POST["button1"])) {
	$target_dir = "img/photoprofil/";
	$target_file = $target_dir . basename($_FILES["photo_profil"]["name"]);
 	$check = getimagesize($_FILES["photo_profil"]["tmp_name"]);
 	if($check !== false) {
 		echo "Le fichier est une image - " . $check["mime"] . ".";
 		$uploadOk = 1;
 		} 
 		else {
			 echo "Le fichier n'est pas une image.";
 			 $uploadOk = 0;
 			   }
}

// Vérifier la taille du fichier
if (isset($_FILES["photo_profil"]["size"]) > 500000) {
 echo "<br>" . "Désolé, votre fichier est trop volumineux.";
 $uploadOk = 0;
}

// Autoriser certains formats de fichier
if (($imageFileType == "jpg") || ($imageFileType == "png") || ($imageFileType == "jpeg")
 || ($imageFileType == "gif")) {
 echo "<br>" . "Fichier autorisé. Format = JPG | JPEG| PNG | GIF.";
 $uploadOk = 1;
} else {
 echo "<br>" . "Désolé. Seuls fichiers en format JPG, JPEG, PNG, GIF sont autorisés.";
 $uploadOk = 0;
}

// Vérifiez si $uploadOk est défini comme 0 par une erreur
if ($uploadOk == 0) {
 echo "<br>" . "Désolé, votre fichier n'a pas été téléchargé.";

// si tout est correct, télécharger le fichier
} 

else
 {

 	if (copy($_FILES["photo_profil"]["tmp_name"], $target_file)) 
 	{
 		echo "<br>" . "Le fichier ". basename( $_FILES["photo_profil"]["name"]). " a été
		téléchargé.";

		$_POST["photo_profil"]= $_FILES["photo_profil"]["name"];
					header("Location: ../moncompteVendeur.php?error=sqlerror");
			exit();
 	}	
 	else 
 	{
 		echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
		fichier.";

	}
 }
}


//modification de la base de données
if(isset($_FILES['photo_profil']['name'])) {

		require"db_handle_inc.php";

	$photo_profil=$_FILES['photo_profil']['name'];
	$username_vendeur=$_SESSION['username'];

		$sql="UPDATE vendeurs SET photo_profil='$photo_profil' WHERE username_vendeur='$username_vendeur'";

		/*if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../moncompteVendeur.php?error=sqlerror");
			exit();
		}*/
		if(mysqli_query($db_connect,$sql)){
			header("Location: ../moncompteVendeur.php?actualisation=success");
			exit();
		}
}
else{
	header("Location: ../moncompteVendeur.php?error=nodetect");
	exit();
}	

if(isset($_FILES['image_fond']['name'])) {

		require"db_handle_inc.php";

	$photo_profil=$_FILES['image_fond']['name'];
	$username_vendeur=$_SESSION['username'];

		$sql="UPDATE vendeurs SET image_fond='$image_fond' WHERE username_vendeur='$username_vendeur'";

		/*if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../moncompteVendeur.php?error=sqlerror");
			exit();
		}*/
		if(mysqli_query($db_connect,$sql)){
			header("Location: ../moncompteVendeur.php?actualisationimage=success");
			exit();
		}
}
else{
	header("Location: ../moncompteVendeur.php?error=nodetect");
	exit();
}	
?>