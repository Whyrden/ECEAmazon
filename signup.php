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
                            
                            <div>
                                <label for="inlineRadio1" class="control-label">Sexe</label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Femme
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Homme
                                </label>
                                
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-md-0.5"></div>
            
                    <div class="col-md-5">
                        <div class="inscrip2">
                            <div class="form-group">
                                <label for="birthDate" class="control-label">Date de naissance</label><br>
                                <input type="date" name="dateNaissance" id="birthDate" class="form-control form-control-sm" placeholder="Date de naissance*">
                            </div>
                            <div class="form-group">
                                <label for="pays">   Pays    </label><br>
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
                            <div class="form-group">
                                <label for="ad" class="control-label">Adresse postale</label><br>
                                <input type="text" name="adresse" id="ad" class="form-control form-control-sm" placeholder="Adresse">
                            </div>
                            <div class="form-group">
                                <label for="postalcode" class="control-label">Code Postal</label><br>
                                <input type="number" name="codePostale" id="postalcode" class="form-control form-control-sm" placeholder="Code postal">	
                            </div>
                            <div class="form-group">
                                <label for="city" class="control-label">Ville</label><br>
                                <input type="text" name="ville" id="city" class="form-control form-control-sm" placeholder="Ville">
                            </div>
                            <div class="form-group">
                                <label for="cellNumber" class="control-label">Numero de téléphone</label><br>
                                <input type="number" name="portable" id="cellNumber" class="form-control form-control-sm" placeholder="Numéro de téléphone portable*">	
                            </div>
                            
                            <div class="form-group">
                                <label for="inputFile">Photo de profil</label>
                                <input type="file" id="inputFile" class="pdp" >
                            </div>
                        </div>
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