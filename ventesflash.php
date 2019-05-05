<!DOCTYPE html>
<html>

<head>
  <title>Ventes Flash</title>
<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">    

  <!--Bootstraps css--> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  

  <!--Jquery first then Bootstraps js-->          
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!--my CSS-->
  <link rel="stylesheet" type="text/css" href="monstyle.css"> 

</head>

<header class="page-header header container-fluid"> 

</header>

<body>
<?php
  require "nav.php"
  ?>
		<form method="POST" action="includes/charger_flash_inc.php">
    
    <ul class="nav justify-content-center bg-danger">
        
		<li class="nav-item">
			<button type="submit" name="livre" class="btn btn-sm btn-light">Livres</button>		
		</li>
		<li class='nav-item'>
			<button type="submit" name="musique" class="btn btn-sm btn-light">Musiques</button>		
		</li>
		<li class='nav-item'>
			<button type="submit" name="vetement" class="btn btn-sm btn-light">Vetements</button>		
		</li>
		<li class='nav-item'>
			<button type="submit"  name="sport" class="btn btn-sm btn-light">Sports</button>		
		</li>
    </ul>
        </form>
            
    
    <br><br>
<h2 class="panier"><img src="img/icon/flash.png" width="40" height="40"/> Vente flash de la semaine <img src="img/icon/flash.png" width="40" height="40"/></h2>
    <br><br>
    
    <!-- Contient toutes les ventes flash-->
    
    <div class="container">
		<div class="row">
            
    <!-- Contient les ventes flash cat -->
            
    
    
    <div class="roman-liv2" style="margin-left:37%;">
    <div class="roman-liv">
  
  <div class="bd-example">

  <div id="venteflash" class="carousel slide" data-ride="carousel" >



    <div class="carousel-inner">

        
        <?php
			if(!empty($_SESSION['items'])){
                $ctp2=0;
                $ctp=0;
            foreach ($_SESSION['items'] as $key => $value) {
            	
           
                
            ?>          
      
      <div class="carousel-item <?php if ($ctp2 === 0) { echo ' active';  } ?>">

          <h5 class="carousel-titre" style="color:slategrey; text-align:center;"><?php if(!empty($value['nom_item']))echo $value['nom_item'];?></h5>
        <img src="<?php echo $value['image']; ?>" class="img-article" alt="bestsellerlivre2" height="314" width="208">
        
        <h6 class="titre-article" ><?php if(!empty($value['prix']))echo $value['prix'];?>€</h6>
        <h6 class="titre-article" ><?php if(!empty($value['description']))echo $value['description'];?></h6>

      </div>
         			<?php
              $ctp2++;  
                $ctp++;
			}
		}
			?>
            
    </div>

    <a class="carousel-control-prev" href="#venteflash" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#venteflash" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

        </div><br>
        <!--Crée un formulaire invisible pour envoyer les données (nom de l'item, quantite, prix, categorie) de l'article au panier-->
	            <form action="includes/addToCart_inc.php" method="POST">

	            	<input type="hidden" name="image" value="<?php if(!empty($value['image'])) echo $value['image']; ?>" class="img-article" height="312" width="208">
	            	<input type="hidden" name="nom_item" value="<?php if(!empty($value['nom_item']))echo $value['nom_item'];?>">
	                <input type="hidden" name="prix" value="<?php if(!empty($value['prix']))echo $value['prix'];?>">
	                <input type="hidden" name="categorie" value="<?php if(!empty($value['categorie']))echo $value['categorie'];?>">
                    
                    <?php $tmp=(string)$ctp;
                    $maCle='q'.$tmp; ?>
                    
	 	            <div class="qt-box">
	                    <?php echo '<button type="button" id="qt-moins" class="btn-qt" onClick="calcQuantiteMoins('.$ctp.')"><img src="minus.png" height="15" width="15"/></button>'?>
	                    
	                    <?php echo '<input type="text" value="1" class="quantite-art" id="'.$maCle.'"/>'?>
	                    
	                    <?php echo '<button type="button" id="qt-plus" class="btn-qt" onClick="calcQuantitePlus('.$ctp.')"><img src="plus.png" height="15" width="15"/></button>'?>
	                </div>
                    
                    <?php
                        $ctp++;
                    ?>
	                
	               <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>

	           	</form>
        </div><br></div>
            
            
            
   
            
    <!--Separateur categorie-->
    <div class="col-sm-1"></div>
            
            
       
       
    
    </div></div>
    <br><br>

  <?php
  require "footer.php"
  ?>
</body>
</body>
</html>