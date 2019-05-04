    <?php
require "nav.php";
?>

<!--Formulaire d'ajout d'article-->
<main>
    

    


    <br><h2 class="panier">Ajouter un article</h2><br>

<form class="inscrip form-horizontal" action="includes/moncompteVendeur_inc.php" method="POST">
	<div class="container">
		<div class="row">

			<div class="col-md-4"></div>
			<div class="col-md-4">
				
					<div class="form-group">
                        <label for="cat">Categorie*</label><br>
                            <select name="categorie" id="cat" OnChange="Choix(this.form)">
                                <option value="0">-------</option>
                                <option value="1">Livre</option>
                                <option value="2">Musique</option>
                                <option value="3">Vetements</option>
                                <option value="4">Sports et Loisirs</option>
                            </select>
                        
                            <select name="sscategorie" id="ssCat">
                                <option>--------</option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>

                    </div>
                    
                    

					<div class="form-group">
                        <label for="name" class="control-label">Nom*</label>
						<input type="text" id="name" name="nom" class="form-control form-control-sm" placeholder="Nom">					
					</div>
                    
                    <div class="form-group">
                        <label for="ref" class="control-label">Reference*</label>
						<input type="number" id="ref" name="reference" class="form-control form-control-sm" placeholder="reference">
					</div>
                    
                    <div class="form-group">
                        <label class="control-label" for="price">prix*</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="price" placeholder="prix">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">€</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="des-crip" class="control-label">Description*</label>
                        <input type="text" name="description" id="des-crip" class="form-control form-control-sm" placeholder="Description">
                    </div>

                    <div class="form-group">
                        <label for="modele" class="control-label">Modèle</label>
                        <input type="text" name="modele" id="modele" class="form-control form-control-sm" placeholder="Modèle">
                    </div>
                    
                    <div class="form-group">
                                <label for="inputFile">Photo de l'article*</label>
                                <input type="file" id="inputFile" class="pdp" >
                    </div>
                    
                    <div class="form-group">
                                <label for="inputFile">Video de l'article</label>
                                <input type="file" id="inputFile" class="pdp" >
                    </div>
                    <p class="ast">Les champs avec * sont obligatoires.</p>
                </div>
                    
					<button type="submit" class="btn btn-success retour2" name="add_success">Ajouter !</button>
					
				
				
			</div>			
		</div>		
        </form>
		<br><br><br>

    
    <br><br><br><br>


	
</main>

<?php
require "footer.php";
?>

