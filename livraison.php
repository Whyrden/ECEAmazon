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
        <br/>
    
    <form>
	<div class="container">
		<div class="row">


			<div class="livraison">
				<h4>Votre adresse de livraison</h4><br/>
                
                    <h6>Identité:</h6>
					<div class="form-group">
						<input type="text" name="familyName" class="form-control form-control-sm" placeholder="nom">
                        <input type="text" name="name" class="form-control form-control-sm" placeholder="prenom">	
					</div>			
					
                    <h6>Adresse:</h6>

					<div class="form-group">
						<input type="number" name="number" class="form-control form-control-sm" placeholder="numero">
						<input type="text" name="street" class="form-control form-control-sm" placeholder="rue">	
						<input type="text" name="city" class="form-control form-control-sm" placeholder="ville">
						<input type="number" name="postal" class="form-control form-control-sm" placeholder="code postal">	
                         <label for="pays"></label><br />
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
						<input type="radio" name="card" value="visa" id="visac" /> <label for="visac"><img src=visa.png width="80" height="50"/></label><br />
                        <input type="radio" name="card" value="maesto" id="maestoc" /> <label for="maestroc"><img src=maestro.png width="80" height="50"/></label><br />
       
					</div>			
					

       

					<div class="form-group">
						<input type="number" name="numberCard" class="form-control form-control-sm" placeholder="numero de carte">
						<input type="month" name="exp" class="form-control form-control-sm" placeholder="date d'expiration">	
						<input type="number" name="cripto" class="form-control form-control-sm" placeholder="cryptogramme">				
                        
                        
                        
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