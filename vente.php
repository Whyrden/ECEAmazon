<?php
require "nav.php";
?>


<!--gestion des items du vendeur-->
<h2>Ajouter un objet à la vente :</h2>

<form class="inscrip form-horizontal" action="includes/vente_inc.php" method="POST">
    <div class="container">
        <div class="row">                
                    <div class="col-md-10">

                            <div class="form-group">
                                <label for="nom_item" class="control-label">Nom de l'objet</label>
                               <input type="text" name="nom_item" class="form-control form-control-sm" placeholder="Nom*">
                            </div>

                            <div class="form-group">
                                <label for="prix" class="control-label">Prix</label>
                                <input type="number" name="prix" class="form-control form-control-sm" placeholder="Prix*">
                            </div>

                            <div class="form-group">
                                <label for="categorie">   Catégorie    </label><br>
                                <select name="pays" id="pays">
                                    <option value="livre">Livre</option>
                                    <option value="musique">Musique</option>
                                    <option value="vetement">Vêtement</option>
                                    <option value="sport">Sport</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description" class="control-label">Description</label>
                                <input type="text" name="description" class="form-control form-control-sm" placeholder="Description*">
                            </div>

                            <div class="form-group">
                                <label for="modeles" class="control-label">Modèle</label>
                                <input type="text" name="modele" class="form-control form-control-sm" placeholder="Modèle">
                            </div>

                             <p class="ast">Les champs avec * sont obligatoires.</p>
                            <button type="submit" name="item_submit">Soumettre un objet</button>
                    </div>
         </div>
     </div>


     <h2>Liste de vos objets en vente :</h2>
</form>



<br><br><br><br><br><br><br>

<?php
require "footer.php";
?>