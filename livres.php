<!-- Au lieu de renvoyer sur des pages quand on choisit une categories, utiliser les differentes bdd pour charger les images ? -->
<?php
require "nav.php";
?>

<main>
	<!--Le menu avec les différents modèles-->
	<ul class="nav justify-content-center bg-warning">
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary"><a href="romans.php"> Romans</a></button>		
		</li>
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary "><a href="mangas.php">Mangas</a></button>		
		</li>
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary"><a href="cartoon.php">Bandes dessinées</a></button>		
		</li>
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary"><a href="sciences.php">Sciences</a></button>		
		</li>
		
			
	</ul>
    <br><br><h1 class="panier">Nos best-sellers du mois</h1>
    <div class="container">
		<div class="row">
            
            <div class="col-sm-1"></div>
            
			<div class="roman-liv">
				
                <img src="img/roman/snk.jpeg" class="img-article" height="312" width="208"/>
                <br><br><h6 class="titre-article"> SnK Tome 26 - 7.95€</h6>
                
                <div class="qt-box">
                    <button type="button" id="qt-moins" class="btn-qt"><img src="minus.png" height="15" width="15"/></button>
                    
                    <input type="text" value="1" id="quantite-art"/>
                    
                    <button type="button" id="qt-plus" class="btn-qt"><img src="plus.png" height="15" width="15"/></button>
                </div>
                
               <button type="submit" class="btn btn-danger bouton-article" name="addToCart"><a href="includes/addTocart.php">Ajouter au panier</a></button>
				
			</div>
            
            <div class="col-sm-1"></div>

            <div class=roman-liv>
				<img src="img/roman/harrypotter.jpg" class="img-article" height="314" width="208"/>
                <br><br><h6 class="titre-article"> Harry Potter - 45€</h6>
               <button type="submit" class="btn btn-danger bouton-article" name="addToCart"><a href="includes/addTocart.php">Ajouter au panier</a></button>
			</div>
            
        </div>
    </div>
	
<br><br><br><br><br>
</main>

<?php
require "footer.php";
?>