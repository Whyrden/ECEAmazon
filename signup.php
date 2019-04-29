<?php
require "nav.php";
?>

<!--le formulaire d'inscription-->
<main>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h1>Inscrivez-vous</h1>
			<form action="includes/signup.php" method="POST">	
				<div class="form-group">
					<input type="text" name="username" class="form-control form-control-sm" placeholder="Username">			
				</div>

				<div class="form-group">
					<input type="text" name="mail" class="form-control form-control-sm" placeholder="E-mail">
				</div>

				<div class="form-group">
					<input type="password" name="password" class="form-control form-control-sm" placeholder="Mot de passe">
				</div>

				<div class="form-group">
					<input type="password" name="confirm_password" class="form-control form-control-sm" placeholder="Confirmer mot de passe">
				</div>

				<div class="form-group">
					<input type="text" name="nom" class="form-control form-control-sm" placeholder="Nom">
				</div>

				<div class="form-group">
					<input type="text" name="prenom" class="form-control form-control-sm" placeholder="Prenom">
				</div>

				<div class="form-group">
					<input type="date" name="dateNaissance" class="form-control form-control-sm" placeholder="Date de naissance">
				</div>

				<div class="form-group">
					<input type="text" name="adresse" class="form-control form-control-sm" placeholder="Adresse">		
				</div>

				<div class="form-group">
					<input type="number" name="codePostale" class="form-control form-control-sm" placeholder="Code postale">		
				</div>

				<div class="form-group">
					<input type="text" name="ville" class="form-control form-control-sm" placeholder="Ville">
				</div>

				<div class="form-group">
					<input type="number" name="tel" class="form-control form-control-sm" placeholder="Numéro de téléphone portable">		
				</div>


				<button type="submit" class="btn btn-primary" name="signup_submit">Valider</button>
			</form>
		</div>
		</div>
	</div>

</main>

<?php
require "footer.php";
?>