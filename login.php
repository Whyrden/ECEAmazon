<?php
require "nav.php";
?>

<!--Formulaire d'inscription-->
<main>

    <br><br><h2 class="panier">Connectez-vous</h2><br>
	<div class="container">
		<div class="row">

			<div class="col-md-4"></div>
			<div class="col-md-4">
				
				<form action="includes/login_inc.php" method="POST">
					<div class="form-group">
						<input type="text" name="identifiant" class="form-control form-control-sm" placeholder="Username">					
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control form-control-sm" placeholder="Mot de passe">	
						<a href="#" style="font-size: 0.7em">Mot de passe oublié?</a>				
					</div>

					<button type="submit" class="btn btn-success retour3" name="login_submit">Se connecter</button>
					
				</form>
				
			</div>			
		</div>		
	</div>	<br><br><br><br><br><br><br><br><br>
	
</main>

<?php
require "footer.php";
?>