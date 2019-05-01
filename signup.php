<?php
require "nav.php";
?>

<!--le formulaire d'inscription-->
<main>


    <br><br><h2 class="panier">Inscrivez-vous</h2> <br>
        <?php
             if(isset($_GET['error']) && $_GET['error']=="emptyfields"){
                echo "<p class='ast'>Veuillez remplir les champs obligatoires!</p>";
             }
        ?>
    
    <form class="inscrip form-horizontal" action="includes/signup_inc.php" method="POST">
	<div class="container">
		<div class="row">			     
                    <div class="col-md-5">
                        <div class="inscrip1">

				            <div class="form-group">
					           <input type="text" name="identifiant" class="form-control form-control-sm" placeholder="Username*">
                            </div>
                            <div class="form-group">
                                <input type="text" name="mail" class="form-control form-control-sm" placeholder="E-mail*">
                                <?php
                                     if(isset($_GET['error']) && $_GET['error']=="invalidmail"){
                                        echo "<p class='ast'>Veuillez saisir un mail valide </p>";
                                     }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-sm" placeholder="Mot de passe*">
                            </div>
                            <div class="form-group">
					           <input type="password" name="confirm_password" class="form-control form-control-sm" placeholder="Confirmer mot de passe*">
                               <?php
                                     if(isset($_GET['error']) && $_GET['error']=="passwordcheck"){
                                        echo "<p class='ast'>La saisie ne correspond pas au mot de passe saisi</p>";
                                     }
                                ?>
                            </div>
                            <div class="form-group">
					           <input type="text" name="nom" class="form-control form-control-sm" placeholder="Nom*">
                            </div>
                            <div class="form-group">
					           <input type="text" name="prenom" class="form-control form-control-sm" placeholder="Prenom*">      
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-md-0.5"></div>
            
                    <div class="col-md-5">
                        <div class="inscrip2">
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
                                <input type="number" name="portable" class="form-control form-control-sm" placeholder="Numéro de téléphone  portable*">	
                            
                             
                            </div></div>
                    </div>


				    
		
		</div>
	</div>
        <br>
        <p class="ast">Les champs avec * sont obligatoires.</p>
        <button type="submit" class="btn btn-success retour2" name="signup_submit">S'inscrire !</button>
			     </form><br>

</main>

<?php
require "footer.php";
?>