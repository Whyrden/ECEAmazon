<<<<<<< HEAD
<?php
require "nav.php";
?>

<!--le formulaire d'inscription-->
<main>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>

			<div class="col-md-4">
				<h1>Inscrivez-vous</h1>
			<form action="includes/signup_inc.php" method="POST">	
				<div class="form-group">
					<input type="text" name="identifiant" class="form-control form-control-sm" placeholder="Username*">			
				</div>

				<div class="form-group">
					<input type="text" name="mail" class="form-control form-control-sm" placeholder="E-mail*">
				</div>

				<div class="form-group">
					<input type="password" name="password" class="form-control form-control-sm" placeholder="Mot de passe*">
				</div>

				<div class="form-group">
					<input type="password" name="confirm_password" class="form-control form-control-sm" placeholder="Confirmer mot de passe*">
				</div>

				<div class="form-group">
					<input type="text" name="nom" class="form-control form-control-sm" placeholder="Nom*">
				</div>

				<div class="form-group">
					<input type="text" name="prenom" class="form-control form-control-sm" placeholder="Prenom*">
				</div>

				<div class="form-group">
					<input type="date" name="dateNaissance" class="form-control form-control-sm" placeholder="Date de naissance*">
				</div>


				<div class="form-group">
					<input type="text" name="pays" class="form-control form-control-sm" placeholder="Pays*">
				</div>

				<div class="form-group">
					<input type="text" name="adresse" class="form-control form-control-sm" placeholder="Adresse">		
				</div>

				<div class="form-group">
					<input type="number" name="codePostale" class="form-control form-control-sm" placeholder="Code postal">		
				</div>

				<div class="form-group">
					<input type="text" name="ville" class="form-control form-control-sm" placeholder="Ville">
				</div>

				<div class="form-group">
					<input type="number" name="portable" class="form-control form-control-sm" placeholder="Numéro de téléphone portable*">	
					<p style="font-size: 0.7em;">Les champs avec * sont obligatoires.</p>	
				</div>



				<button type="submit" class="btn btn-primary" name="signup_submit">Valider</button>
			</form>
		</div>
		</div>
	</div>

</main>

<?php
require "footer.php";
=======
<?php
require "nav.php";
?>

<!--le formulaire d'inscription-->
<main>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>

			<div class="col-md-4">
				<h1>Inscrivez-vous</h1>
			<form action="includes/signup_inc.php" method="POST">	
				<div class="form-group">
					<input type="text" name="identifiant" class="form-control form-control-sm" placeholder="Username*">			
				</div>

				<div class="form-group">
					<input type="text" name="mail" class="form-control form-control-sm" placeholder="E-mail*">
				</div>

				<div class="form-group">
					<input type="password" name="password" class="form-control form-control-sm" placeholder="Mot de passe*">
				</div>

				<div class="form-group">
					<input type="password" name="confirm_password" class="form-control form-control-sm" placeholder="Confirmer mot de passe*">
				</div>

				<div class="form-group">
					<input type="text" name="nom" class="form-control form-control-sm" placeholder="Nom*">
				</div>

				<div class="form-group">
					<input type="text" name="prenom" class="form-control form-control-sm" placeholder="Prenom*">
				</div>

				<div class="form-group">
					<input type="date" name="dateNaissance" class="form-control form-control-sm" placeholder="Date de naissance*">
				</div>


				<div class="form-group">
					<input type="text" name="pays" class="form-control form-control-sm" placeholder="Pays*">
				</div>

				<div class="form-group">
					<input type="text" name="adresse" class="form-control form-control-sm" placeholder="Adresse">		
				</div>

				<div class="form-group">
					<input type="number" name="codePostale" class="form-control form-control-sm" placeholder="Code postal">		
				</div>

				<div class="form-group">
					<input type="text" name="ville" class="form-control form-control-sm" placeholder="Ville">
				</div>

				<div class="form-group">
					<input type="number" name="portable" class="form-control form-control-sm" placeholder="Numéro de téléphone portable*">	
					<p style="font-size: 0.7em;">Les champs avec * sont obligatoires.</p>	
				</div>



				<button type="submit" class="btn btn-primary" name="signup_submit">Valider</button>
			</form>
		</div>
		</div>
	</div>

</main>

<?php
require "footer.php";
>>>>>>> 36c0b0d4b6c64c8b797bab6957fa71ef412e57c9
?>