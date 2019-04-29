<!DOCTYPE html>
<html>
<head>
	<title>Navigation</title>
</head>
<body>

	<!--barre de navigation-->
	<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="projetWeb.php">ECE Amazon</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="main-navigation" style="font-size: 0.9rem">
			<ul class="navbar-nav">

				<li class="nav-item"> 
					<a class="nav-link" href="accueil.php">Accueil</a>
				</li>


				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Catégorie</a>

					<div class="dropdown-menu" >
						<a class="dropdown-item" href="livres.php">Livres</a>
						<a class="dropdown-item" href="musiques.php">Musiques</a>
						<a class="dropdown-item" href="vetements.php">Vêtements</a>
						<a class="dropdown-item" href="sports.php">Sports</a>
					</div>								
				</li>

				<li class="nav-item">
					<a class="nav-link" href="panier.php">Mon panier</a>					
				</li>

				<li class="nav-item">
					<a class="nav-link" href="monCompte.php">Mon compte</a>				
				</li>

				<li class="nav-item">
					<a class="nav-link" href="ventesFlash.php">Ventes flash</a>				
				</li>

				<li class="nav-item">
					<a class="nav-link" href="vente.php">Vendre</a>				
				</li>

				<li class="nav-item">
					<a href="#"><button class="btn btn-sm btn-light">Se connecter</button></a>
					<a href="signup.php"><button class="btn btn-sm btn-primary">S'inscrire</button></a>
				</li>
				
			</ul>
		
		</div>
	</nav>

</body>
</html>