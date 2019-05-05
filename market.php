<!DOCTYPE html>
<html>
<head>
	<!--Bootstraps css--> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  

  <!--Jquery first then Bootstraps js-->          
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!--my CSS-->
  <link rel="stylesheet" type="text/css" href="monstyle.css"> 
</head>
</html>


<!-- Au lieu de renvoyer sur des pages quand on choisit une categories, utiliser les differentes bdd pour charger les images ? -->
<?php
require "nav.php";
?>

<main>
	<!--Le menu avec les différents modèles en fonction de la catégorie-->


	<ul class="nav justify-content-center bg-dark">
		<!--affichage des modèles en fonction de la catégoriee choisie-->

		<!--LIVRES-->
		<?php if(isset($_GET['chargement']) && $_GET['chargement']=="livres")
		echo"
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Romans</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Mangas</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>BD</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Sciences</button>		
		</li>";	
		?>

		<!--MUSIQUES-->
		<?php if(isset($_GET['chargement']) && $_GET['chargement']=="musiques")
		echo"
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Pop</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Rock</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Films/Animés</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>K-POP</button>		
		</li>";	
		?>

		<!--VETEMENTS-->
		<?php if(isset($_GET['chargement']) && $_GET['chargement']=="vetements")
		echo"
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Hommes</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Femmes</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Enfants</button>		
		</li>
		";
		?>

		<!--SPORTS-->
		<?php if(isset($_GET['chargement']) && $_GET['chargement']=="sports")
		echo"
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Judo</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Taekwondo</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Football</button>		
		</li>
		<li class='nav-item'>
			<button type='button' class='btn btn-sm btn-light'>Basketball</button>		
		</li>";	
		?>



	</ul>

    <br><br><h1 class="panier">Notre collection</h1>
    <div class="container">
		<div class="row">
            
            
            
			<?php
			if(!empty($_SESSION['items'])){
                $ctp=0;
            foreach ($_SESSION['items'] as $key => $value) {
            	# code...
                
            ?>
            <div class="col-sm-1"></div>
            <div class="roman-liv2">
			<div class="roman-liv">
			<br>	
                <h6 class="titre-article"> <?php if(!empty($value['nom_item']))echo $value['nom_item'];?></h6>
	            <img src="<?php echo $value['image']; ?>" class="img-article" height="312" width="208">
	            
	            <h6 class="titre-article"> <?php if(!empty($value['description']))echo $value['description'];?></h6>
	            <h6 class="titre-article"> <?php if(!empty($value['vendeur']))echo $value['vendeur'];?></h6>
	            <h6 class="titre-article"> <?php if(!empty($value['prix']))echo $value['prix'];?>€</h6>

	            <!--Crée un formulaire invisible pour envoyer les données (nom de l'item, quantite, prix, categorie) de l'article au panier-->
	            <form action="includes/addToCart_inc.php" method="POST">

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
	                
	               <button type="submit" class="btn btn-success bouton-article" name="addToCart">Ajouter au panier</button>

	           	</form>

	            		
                </div><br></div>


			<?php
                
			}
		}
			?>
            
        </div>
    </div>
	
<br><br><br><br><br>
</main>

<?php
require "footer.php";
?>