<?php
require "nav.php";
?>

<main>


<h1>Nique ta mere</h1>
    
    <div class="container">
		<div class="row">


    
<?php
//identifier le nom de base de données
 $database = "eceamazon";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
 $db_handle = mysqli_connect('localhost', 'root', 'root' );
 $db_found = mysqli_select_db($db_handle, $database);

     $sql = "SELECT * FROM items";
     $result = mysqli_query($db_handle, $sql);
     while ($data = mysqli_fetch_assoc($result)) {
         
    ?>
    
            <div class="col-sm-1"></div>
            
			<div class="roman-liv">
                
                <button type="button" id="qt-moins" class="close" ><img src="close.png" height="15" width="15"/></button>
				
                <?php echo '<img src="' . $data['image'] . '" class="img-article" height="312" width="208"/>
                <br><br><h6 class="titre-article">' . $data['nom_item'] . ' - ' . $data['prix'] . '€</h6>' ?>
                
                <div class="qt-box">
                    <button type="button" id="qt-moins" class="btn-qt" onClick="calcQuantiteMoins()"><img src="minus.png" height="15" width="15"/></button>
                    
                    <input type="text" value="1" id="quantite-art"/>
                    
                    <button type="button" id="qt-plus" class="btn-qt" onClick="calcQuantitePlus()"><img src="plus.png" height="15" width="15"/></button>
                </div>
                
               <button type="submit" class="btn btn-danger bouton-article" name="addToCart"><a href="includes/addTocart.php">Ajouter au panier</a></button>
				
			</div>


<?php }//end while


    ?>
            
        </div></div>
    


</main>

<?php
require "footer.php";
?>