<!-- En hard en attendant la bdd-->

<?php
require "nav.php";
?>

<main>
	<!--Le menu avec les différents modèles-->
	<ul class="nav justify-content-center bg-warning">
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary active"><a href="romans.php"> Romans</a></button>		
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
    
    <br><br>
    
    <div class="container">
		<div class="row">
            
			<div class="roman-liv">
				
				<img src="img/roman/eragon.jpg" class="img-article" width="208" height="299"/>
                <br><br><h6 class="titre-article">Eragon - 15€</h6>
                <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
				
				
			</div>
            
            <div class="col-sm-1"></div>
            
			<div class="roman-liv">
				
                <img src="img/roman/harrypotter.jpg" class="img-article" height="314" width="208"/>
                <br><br><h6 class="titre-article"> Harry Potter - 45€</h6>
               <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
				
			</div>
            
            <div class="col-sm-1"></div>

            <div class=roman-liv>
				<img src="img/roman/harrypotter.jpg" class="img-article" height="314" width="208"/>
                <br><br><h6 class="titre-article"> Harry Potter - 45€</h6>
               <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
			</div>
			
		</div>
		
	</div>
	<br><br>

</main>

<?php
require "footer.php";
?>