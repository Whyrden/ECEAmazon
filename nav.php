<?php
	session_start(); //Pour que la session soit ouverte sur toutes les pages
?>

<!DOCTYPE html>
<html>
<head>
	<title>Navigation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">    

	<!--Bootstraps css--> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  

	<!--Jquery first then Bootstraps js-->          
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>  
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!--my CSS-->
	<link rel="stylesheet" type="text/css" href="monstyle.css"> 
    
    <!-- Script JS-->
    <script type="text/javascript" src="monscript.js"></script>
    
</head>
<body>

	<!--barre de navigation-->
	<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="accueil.php">ECE Amazon  <img src="img/icon/logo.png" widht="72" height="27"/></a>
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

					<form method="POST" action="includes/charger_items_inc.php">
					<div class="dropdown-menu">
						<button class="dropdown-item" name="livres">Livres</button>
						<button class="dropdown-item" name="musiques">Musiques</button>
						<button class="dropdown-item" name="vetements">Vetements</button>
						<button class="dropdown-item" name="sports">Sports</button>
					</div>		
					</form>						
				</li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Vente flash</a>

                    <form method="POST" action="includes/charger_flash_inc.php">
                        <div class="dropdown-menu">
                            <button class="dropdown-item" name="livre" >Livres</button>	
                            <button class="dropdown-item" name="musique" >Musiques</button>
                            <button class="dropdown-item" name="vetement" >Vetements</button>	
                            <button class="dropdown-item" name="sport" >Sports</button>	



                        </div>
                    </form>
				</li>
                
                <li class="nav-item">
					<?php
                if (isset($_SESSION['nom']) and !isset($_SESSION['username_vendeur']) and !isset($_SESSION['username_admin'])){

					echo '<li class="nav-item">
							<a class="nav-link" href="monCompte.php">Mon compte<img src="img/icon/boy.png" width="20" height="20"/></a>		
						  </li>';

				}
                if(isset($_SESSION['username_vendeur']))
				{
					echo '<li class="nav-item">
							<a class="nav-link" href="monComptevendeur.php">Mon compte<img src="img/icon/boy.png" width="20" height="20"/></a>	
							</li>
							<li class="nav-item">
							<a class="nav-link" href="vente.php">Vendre</a>		
							</li>';
				}
                    
                if(isset($_SESSION['username_admin']))
				{
					echo '<li class="nav-item">
							<a class="nav-link" href="monCompteAdmin.php">Mon compte<img src="img/icon/boy.png" width="20" height="20"/></a>				
						  </li>';
				}
                  
                  ?>	
            
						<li class="nav-item">
							<a class="nav-link" href="includes/panier_inc.php"><img src="img/icon/cart.png" width="25" height="25" style="-webkit-transform: scaleX(-1); transform: scaleX(-1);"/></a>					
						  </li>
				
				

				
				<?php
				if(isset($_SESSION['username_client']) || isset($_SESSION['username_vendeur']) || isset($_SESSION['username_admin']))
				{
					echo '<li class="nav-item">
							<a href="includes/logout_inc.php"><button class="btn btn-sm btn-danger">Se deconnecter</button></a>				
						  </li>';
				}
				else{
					echo '<li class="nav-item">
						<a href="login.php"><button class="btn btn-sm btn-light">Se connecter</button></a>
						<a href="signup.php"><button class="btn btn-sm btn-primary">Inscription</button></a>
						<a href="signupVendeur.php"><button class="btn btn-sm btn-primary">Inscription Vendeur</button></a>
						</li>';
				}
				?>

				

				
			</ul>
		
		</div>
	</nav>


</body>
</html>