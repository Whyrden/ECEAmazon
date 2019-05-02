<?php
require "nav.php";
?>

<main>
	<?php
	    $photoprofil = "img/photoprofil/".$_SESSION['photo_profil'];
	?>	

	 <br/>
    <br/>

    <h2 class="titre"> <img src="img/icon/boy.png" width="40" height="40"/>Votre compte<img src="img/icon/girl.png" width="40" height="40"/></h2>
    <br>

    <br><br>
    <div class="container">
		<div class="row">
            
            <div class="compte1">
        <img src="<?php echo $photoprofil ?>" width=150 height=150/>
    </div>
    <div class="compte2">

        <br>
       

       <?php
        if(isset($_SESSION['username'])){
            echo "Nom d'utilisateur: ".$_SESSION['username'],'<br>';
            echo "Nom: ".$_SESSION['nom'],'<br>';
            echo "Prenom: ".$_SESSION['prenom'],'<br>';
            echo "Email: ".$_SESSION['email'],'<br>';
            
        }
        ?>
         </p>
            
    
    </div>
    
    
        </div>
    </div>

    <br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>

			<div class="col-md-4">


<form method="post" action="includes/monCompteVendeur_inc.php" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Sélectionnez une image de profil:</td>
						<td><input type="file" name="photo_profil"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
 						<input type="submit" name="button1" value="Téléchargez"></td>

					</tr>
				</table>

				</form>



<form action="monCompteVendeur.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Décorez votre page de profil !</td>
						<td><input type="file" name="image_fond"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
 						<input type="submit" name="button2" value="Téléchargez"></td>
					</tr>
				</table>

				</form>

			</div>
		</div>
	</div>

</main>

<?php

if(isset($_FILES['photo_profil'])){
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
 		} else {
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
 	if (move_uploaded_file($_FILES["photo_profil"]["tmp_name"], $target_file)) 
 	{
 		echo "<br>" . "Le fichier ". basename( $_FILES["photo_profil"]["name"]). " a été
		téléchargé.";

		$_POST["photo_profil"]= $_FILES["photo_profil"]["name"];
 	}	
 	else 
 	{
 		echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
		fichier.";
	}
 }
}
?>

<br><br><br><br><br><br><br>

<?php
require "footer.php";
?>