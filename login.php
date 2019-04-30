<?php
require "nav.php";
?>

<!--Formulaire d'inscription-->
<main>

	<div class="container">
		<div class="row">

			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h2>Connectez-vous</h2>
				<form action="includes/login_inc.php" method="POST">
					<div class="form-group">
						<input type="text" name="identifiant" class="form-control form-control-sm" placeholder="Username">					
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control form-control-sm" placeholder="Mot de passe">	
						<a href="#" style="font-size: 0.7em">Mot de passe oublié?</a>				
					</div>

					<button type="submit" class="btn btn-success" name="login_submit">Se connecter</button>
					
				</form>
				
			</div>			
		</div>		
	</div>	
	
</main>

<?php
require "footer.php";
?>