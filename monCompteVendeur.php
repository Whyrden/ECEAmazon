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
        if(isset($_SESSION['username_vendeur'])){
            echo "Nom d'utilisateur: ".$_SESSION['username_vendeur'],'<br>';
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
<!--gestion des items du vendeur-->
<h2>Ajouter un objet à la vente :</h2>

<form class="inscrip form-horizontal" action="includes/moncompteVendeur_inc.php" method="POST">
	<div class="container">
		<div class="row">			     
                    <div class="col-md-5">

				            <div class="form-group">
                                <label for="nom" class="control-label">Nom de l'objet</label>
					           <input type="text" name="nom_item" class="form-control form-control-sm" placeholder="Nom*">
                            </div>

                            <div class="form-group">
                                <label for="prix" class="control-label">Prix</label>
                                <input type="number" name="prix" id="mdp" class="form-control form-control-sm" placeholder="Prix*">
                            </div>

                            <div class="form-group">
                                <label for="categorie">   Catégorie    </label><br>
                                <select name="pays" id="pays">
                                    <option value="livre">Livre</option>
                                    <option value="musique">Musique</option>
                                    <option value="vetement">Vêtement</option>
                                    <option value="sport">Sport</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mdp" class="control-label">Description</label>
                                <input type="text" name="description" id="mdp" class="form-control form-control-sm" placeholder="Description*">
                            </div>

							<div class="form-group">
                                <label for="mdp" class="control-label">Modèle</label>
                                <input type="text" name="modele" id="mdp" class="form-control form-control-sm" placeholder="Modèle">
                            </div>

                             <p class="ast">Les champs avec * sont obligatoires.</p>
        					<button type="submit" class="btn btn-success retour2" name="item_submit">Soumettre un objet</button>
                    </div>
         </div>
     </div>
</form>




<br><br><br><br><br><br><br>

<?php
require "footer.php";
?>