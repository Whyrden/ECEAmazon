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
  <?php
  if(!isset($_SESSION['username_client'])){
    header("Location: panier.php?error=noUser");
    exit();
  }
  ?>
        <br/>
        <br/>
    
    <form>
	<div class="container">
		<div class="row">
            

			<div class="livraison">
				<h4>Votre adresse de livraison</h4><br/>
                
					<div class="form-group">
                        <label for="name" class="control-label">Nom et prenom</label>
						<input type="text" name="fullName" class="form-control form-control-sm" id="name" placeholder="Jane Doe">  
                    </div>			
					
                    <br>
					<div class="form-group">
                        <label for="ad-l1" class="control-label">Adresse</label>
						<input type="text" name="adresse1" class="form-control form-control-sm" id="ad-l1"placeholder="Adresse Ligne 1">
                    </div>
                    <div class="form-group">
						<input type="text" name="adresse2" class="form-control form-control-sm" placeholder="Adresse Ligne 2">
                    </div>
                    <div class="form-group">
                        <label for="ville" class="control-label">Ville</label>
						<input type="text" name="city" class="form-control form-control-sm" id="ville" placeholder="Ville">
                    </div>
                    <div class="form-group">
                        <label for="postalCode" class="control-label">Code Postal</label>
						<input type="number" name="postal" class="form-control form-control-sm" id="postalCode" placeholder="code postal">
                    </div><br>
                    <div class="form-group">
                        <label for="pays">   Pays    </label>
                        <select name="pays" id="pays">
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
						<input type="number" name="numberCard" id="cardNumber" class="form-control form-control-sm" placeholder="numero de carte">
                    </div>
                
                    <div class="form-group">
                        <label for="expCard" class="control-label">Date d'expiration</label>
						<input type="month" name="exp" id="expCard" class="form-control form-control-sm" placeholder="date d'expiration">
                    </div>
                
                    <div class="form-group">
                        <label for="writtenName" class="control-label">Nom sur la carte</label>
						<input type="text" name="exp" id="writtenName" class="form-control form-control-sm" placeholder="Jane Doe">
                    </div>
                
                    <div class="form-group">
                        <label for="cript" class="control-label">Code de sécurité</label>
						<input type="number" name="cripto" id="cript" class="form-control form-control-sm" placeholder="cryptogramme">
                    </div>
                        
                        
                        
					</div>

					
                </div>
            </div>
           
					
				
				
				
	</div>	
        <br/>

        
         <button type="submit" class="btn btn-success livr" name="order"><a href="validationCommande.php">Commander !</a></button>
	</form>
        <br/>
        <br/>
        <br/>
        <br/>
        
        
</body>

<?php
require "footer.php";
?>