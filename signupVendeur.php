<?php
require "nav.php";
?>

<!--le formulaire d'inscription-->
<main>


    <br><br><h2 class="panier">Créez un compte vendeur !</h2> <br>
        <?php
             if(isset($_GET['error']) && $_GET['error']=="emptyfields"){
                echo "<p class='ast'>Veuillez remplir les champs obligatoires!</p>";
             }
        ?>
    
    <form class="inscrip form-horizontal" action="includes/signupVendeur_inc.php" method="POST">
	<div class="container">
		<div class="row">			     
                    <div class="col-md-5">
                        <div class="inscrip1">

				            <div class="form-group">
                                <label for="ident" class="control-label">Identifiant</label>
					           <input type="text" name="identifiant" id="ident" class="form-control form-control-sm" placeholder="Username*">
                            </div>

                            <div class="form-group">
                                <label for="email" class="control-label">Adresse mail</label>
                                <input type="text" name="mail" id="email" class="form-control form-control-sm" placeholder="E-mail*">
                                <?php
                                     if(isset($_GET['error']) && $_GET['error']=="invalidmail"){
                                        echo "<p class='ast'>Veuillez saisir un mail valide </p>";
                                     }
                                ?>

                            </div>
                            <div class="form-group">
                                <label for="mdp" class="control-label">Mot de passe</label>
                                <input type="password" name="password" id="mdp" class="form-control form-control-sm" placeholder="Mot de passe*">
                            </div>

                            <div class="form-group">
                                <label for="okmdp" class="control-label">Confirmer votre mot de passe</label>
					           <input type="password" name="confirm_password" id="okmdp" class="form-control form-control-sm" placeholder="Confirmer mot de passe*">
                               <?php
                                     if(isset($_GET['error']) && $_GET['error']=="passwordcheck"){
                                        echo "<p class='ast'>Le champ ne correspond pas au mot de passe saisi</p>";
                                     }
                                ?>

                            </div>
                            <div class="form-group">
                                <label for="namee" class="control-label">Nom</label>
					           <input type="text" name="nom" id="namee" class="form-control form-control-sm" placeholder="Nom*">
                            </div>
                            <div class="form-group">
                                <label for="prenome" class="control-label">Prénom</label>
					           <input type="text" name="prenom" id="prenome" class="form-control form-control-sm" placeholder="Prenom*">      
                            </div>
                            
                        </div>

                    </div>
                    
                    <div class="col-md-0.5"></div>
            
                    <div class="col-md-5">
                        <div class="inscrip2">

                             <div class="form-group">
                                <label for="prenome" class="control-label">Description</label>
                               <textarea rows="20" cols="50" type="text" name="description" id="descriptione" class="form-control form-control-sm" placeholder="Entrez votre description"></textarea>
                            </div>
                           
                        </div>
                    </div>


				    
		
		</div>
	</div>
        <br>
        <p class="ast">Les champs avec * sont obligatoires.</p>
        <button type="submit" class="btn btn-success retour2" name="signupVendeur_submit">S'inscrire !</button>
			     </form><br>

</main>

<?php
require "footer.php";
?>