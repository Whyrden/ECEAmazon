<?php
require "nav.php";
?>

<!--Formulaire d'inscription-->
<main>

    <br><br><h2 class="panier">Connectez-vous</h2><br>
    <?php
    if(isset($_GET['error'])){
    	if ($_GET['error']=="noStatus") {
    		 echo "<p class='ast'>Veuillez sélectionner un utilisateur valide </p>";
    		# code...
    	}

    }
    ?>
	<div class="container">
		<div class="row">

			<div class="col-md-4"></div>
			<div class="col-md-4">
				
				<form action="includes/login_inc.php" method="POST">
					<div class="form-group">
                        <label for="id1" class="control-label">Identifiant</label>
						<input type="text" id="id1" name="identifiant" class="form-control form-control-sm" placeholder="Username">					
					</div>

					<div class="form-group">
                        <label for="pw" class="control-label">Mot de passe</label>
						<input type="password" id="pw" name="password" class="form-control form-control-sm" placeholder="Mot de passe">	
						<a href="#" style="font-size: 0.7em">Mot de passe oublié?</a>				
					</div>

					<div class="form-group">
						<label class="chekcbox-inline">
                        <input type="radio" name="loginAcheteur" value="option1"> Acheteur
                        </label>

                        <label class="checkbox-inline">
                        <input type="radio" name="loginVendeur"  value="option2"> Vendeur
                        </label>

                        <label class="checkbox-inline">
                        <input type="radio" name="loginAdmin"  value="option3"> Admin
                        </label>
						
					</div>

					<button type="submit" class="btn btn-success retour3" name="login_submit">Se connecter</button>
					
				</form>
				
			</div>			
		</div>		
	</div>	<br><br><br><br><br><br><br>
	
</main>

<?php
require "footer.php";
?>