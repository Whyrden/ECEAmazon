<?php
require "nav.php";
?>

<main>


<br><h1 class="panier">Tous les articles</h1><br>
    
    <div class="container">
		<div class="row">


    
<?php

 $database = "eceamazon";

 $db_handle = mysqli_connect('localhost', 'root', 'root' );
 $db_found = mysqli_select_db($db_handle, $database);
    $i=0;
     $sql = "SELECT * FROM items";
     $result = mysqli_query($db_handle, $sql);
     while ($data = mysqli_fetch_assoc($result)) {
         
    ?>
            
            <div class="col-sm-1"></div>
            <div class="roman-liv2">
			<div class="roman-liv">
                
				
                <?php echo '<img src="' . $data['image'] . '" class="img-article" height="312" width="208"/>
                <br><br><h6 class="titre-article">' . $data['nom_item'] . ' - ' . $data['prix'] . '€</h6>' ?>
                
                <div class="qt-box">
                    <?php echo '<button type="button" id="qt-moins" class="btn-qt" onClick="calcQuantiteMoins('.$i.')"><img src="minus.png" height="15" width="15"/></button>'?>
                    
                    <?php $tmp=(string)$i;
                    $maCle='q'.$tmp; ?>
                    
                    <?php echo '<input type="text" value="1" class="quantite-art" id="'.$maCle.'"/>'?>
                    
                    <?php echo '<button type="button" id="qt-plus" class="btn-qt" onClick="calcQuantitePlus('.$i.')"><img src="plus.png" height="15" width="15"/></button>'?>
                </div>
                
               <button type="submit" class="btn btn-danger bouton-article" name="addToCart"><a href="includes/admin_article_inc.php?id_item=<?php echo $data['id_item']; ?>">Supprimer du site</a></button>
				
                </div><br></div>


<?php 
     
     $i++; }//end while


    ?>
            
        </div></div>
    


</main>

<?php
require "footer.php";
?>