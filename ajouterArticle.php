<!DOCTYPE html>
<html>
    
    <head>
        	<title>Ajouter un article - ECE amazon</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">    

	<!--Bootstraps css--> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  

	<!--Jquery first then Bootstraps js-->          
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>  
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!--my CSS-->
	<link rel="stylesheet" type="text/css" href="monstyle.css"> 
    
    <script type="text/javascript">
        
        function Choix(form) {
            
            var i = form.categorie.selectedIndex;

            
            if (i == 0) {
                return;
            }
            switch (i) {
                case 1 : var txt = new Array ('Roman','Manga','B-D','Science'); break;
                case 2 : var txt = new Array ('Pop','Rock','Rap','Anime'); break;
                case 3 : var txt = new Array ('Hommes','Femmes','Enfants','none'); break;
                case 4 : var txt = new Array ('Taekwondo','Danse','Football','Natation'); break;
            }
            form.categorie.selectedIndex = 0;
            for (i=0;i<4;i++) {
                form.sscategorie.options[i+1].text=txt[i];

            }
        } 
</script>
        
    </script>
    
    </head>

<!--Formulaire d'ajout d'article-->
<body>
    
    <?php
require "nav.php";
?>
    


    <br><h2 class="panier">Ajouter un article</h2><br>
	<div class="container">
		<div class="row">

			<div class="col-md-4"></div>
			<div class="col-md-4">
				
				<form >
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
					
				</form>
				
			</div>			
		</div>		
	</div>	<br><br><br>

    
    <br><br><br><br>

<?php
require "footer.php";
?>
	
</body>

