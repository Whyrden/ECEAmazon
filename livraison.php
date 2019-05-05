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

<?php
require "nav.php";
?>

<!--Formulaire de livraison-->
<head>
    <meta charset="utf-8">
    <!--my CSS-->
	<link rel="stylesheet" type="text/css" href="monstyle.css"> 
    <title>Livraison et paiement</title>

</head>

<body>

        <br/>
        <br/>
    
    <form action="includes/livraison_inc.php" method="POST">
	<div class="container">
		<div class="row">
            
			<div class="livraison">
                <!--Creer un formulaire de livraison et vérifier que les coordonnées bancaires coorespondent à celles du client-->
                <!--Pré remplir l'adresse de livraison par celui du client-->
				    <h4>Votre adresse de livraison</h4><br/>
                
					<div class="form-group">
                        <label for="name" class="control-label">Nom</label>
						<input type="text" name="nom" class="form-control form-control-sm" id="name"  value="<?php if(isset($_SESSION['nom'])) echo $_SESSION['nom'];?>">  
                    </div>	

                    <div class="form-group">
                        <label for="name" class="control-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control form-control-sm" value="<?php if(isset($_SESSION['prenom'])) echo $_SESSION['prenom'];?>">  
                    </div>		
					
                    <br>
					<div class="form-group">
                        <label for="ad-l1" class="control-label">Adresse</label>
						<input type="text" name="adresse1" class="form-control form-control-sm" id="ad-l1" value="<?php if(isset($_SESSION['adresse'])) echo $_SESSION['adresse'];?>">
                    </div>
                    <div class="form-group">
						<input type="text" name="adresse2" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="postalCode" class="control-label">Code Postal</label>
                        <input type="number" name="code_postal" class="form-control form-control-sm" id="postalCode" value="<?php if(isset($_SESSION['codePostal'])) echo $_SESSION['codePostal'];?>">
                    </div>
                    <div class="form-group">
                        <label for="ville" class="control-label">Ville</label>
						<input type="text" name="ville" class="form-control form-control-sm" id="ville" value="<?php if(isset($_SESSION['ville'])) echo $_SESSION['ville'];?>">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="pays">   Pays    </label>
                        <select name="pays" id="pays">
                            <option selected="<?php if(isset($_SESSION['pays'])) echo $_SESSION['pays'];?>">"<?php if(isset($_SESSION['pays'])) echo $_SESSION['pays'];?>"</option>
                            <option value="france">France</option>
                            <option value="espagne">Espagne</option>
                            <option value="italie">Italie</option>
                            <option value="royaume-uni">Royaume-Uni</option>
                            <option value="canada">Canada</option>
                            <option value="etats-unis">États-Unis</option>
                            <option value="chine">Chine</option>
                            <option value="japon">Japon</option>
                        </select>             
                    </div>	

                    <div class="form-group">
                        <label for="telephone" class="control-label">Numéro de telephone</label>
                        <input type="text" name="telephone" class="form-control form-control-sm" id="ville" value="<?php if(isset($_SESSION['telephone'])) echo $_SESSION['telephone'];?>">
                    </div>


		      </div>	
                    <br/>
                    <br/>
            
            
            <div class="paiment">
            
            <div>
                    <h4>Votre moyen de paiement</h4><br/>
                
                
					<div class="form-group">
                        <label class="radio-inline">
						<input type="radio" name="card" value="visa" id="visac" /><img src="img/icon/visa.png" width="56" height="35"/>
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="card" value="maesto" id="maestoc" /><img src="img/icon/maestro.png" width="56" height="35"/>
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="card" value="amex" /><img src="img/icon/amex.jpg" width="56" height="35"/>
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="card" value="paypal" /><img src="img/icon/paypal.png" width="56" height="35"/>
                        </label>
                        
       
					</div>		

					<div class="form-group">
                        <label for="cardNumber" class="control-label">Numéro de la carte</label>
						<input type="number" name="numberCard" id="cardNumber" class="form-control form-control-sm">
                    </div>
                
                    <div class="form-group">
                        <label for="expCard" class="control-label">Date d'expiration</label>
						<input type="date" name="exp" id="expCard" class="form-control form-control-sm">
                    </div>
                
                    <div class="form-group">
                        <label for="writtenName" class="control-label">Nom sur la carte</label>
						<input type="text" name="nom_carte" id="writtenName" class="form-control form-control-sm">
                    </div>
                
                    <div class="form-group">
                        <label for="cript" class="control-label">Code de sécurité</label>
						<input type="number" name="crypto" id="cript" class="form-control form-control-sm">
                    </div>
                                                                   
					</div>

					
                </div>
            </div>							
	</div>	
        <br/>     
         <input type="submit" class="btn btn-success livr" name="order" value="Commander!">
	</form>

        <br/>
        <br/>
        <br/>
        <br/>
        
        
</body>

<?php
require "footer.php";
?>