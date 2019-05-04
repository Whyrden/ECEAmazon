<?php
require "nav.php";
?>

<main>
	<!--Le menu avec les différents modèles-->

    
    <ul class="nav justify-content-center bg-warning">
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary active"><a href="pop.php"> Pop</a></button>		
		</li>
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary "><a href="rock.php">Rock</a></button>		
		</li>
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary"><a href="rap.php">Rap</a></button>		
		</li>
		<li class="nav-item">
			<button type="button" class="btn btn-sm btn-primary"><a href="animes.php">Animes</a></button>		
		</li>
		
			
	</ul>
    
    <br><br>

	<div class="container">
		<div class="row">
			<div class="roman-liv">
				
				<img src="img/musique/kpop.png" class="img-article" width="208" height="208"/>
                <br><br><h6 class="titre-article">F(x) - 40€</h6>
                <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
				
				
			</div>
            
            <div class="col-sm-1"></div>
            
			<div class="roman-liv">
				
                <img src="img/musique/kpop.png" class="img-article" height="208" width="208"/>
                <br><br><h6 class="titre-article"> F(x) - 40€</h6>
                <div class="qt-box">
                    <button type="button" id="qt-moins" class="btn-qt" onClick="calcQuantiteMoins()"><img src="minus.png" height="15" width="15"/></button>
                    
                    <input type="text" value="1" id="quantite-art"/>
                    
                    <button type="button" id="qt-plus" class="btn-qt" onClick="calcQuantitePlus()"><img src="plus.png" height="15" width="15"/></button>
                </div>
               <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
				
			</div>
            
            <div class="col-sm-1"></div>

            <div class=roman-liv>
				<img src="img/musique/kpop.png" class="img-article" height="208" width="208"/>
                <br><br><h6 class="titre-article"> F(x) - 40€</h6>
                <div class="qt-box">
                    <button type="button" id="qt-moins" class="btn-qt" onClick="calcQuantiteMoins()"><img src="minus.png" height="15" width="15"/></button>
                    
                    <input type="text" value="1" id="quantite-art"/>
                    
                    <button type="button" id="qt-plus" class="btn-qt" onClick="calcQuantitePlus()"><img src="plus.png" height="15" width="15"/></button>
                </div>
               <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
			</div>
			
		</div>
			
		</div>
		
	</div>
	

</main>

<?php
require "footer.php";
?>