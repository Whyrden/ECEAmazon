<?php
require "nav.php";
?>

<main>
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
                                <select name="categorie">
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

</form>

 <h2>Gérer vos objets en vente :</h2>

<form class="inscrip form-horizontal" action="includes/vente_inc.php" method="POST">
    <div class="container">
        <div class="row">                
                    <div class="col-md-10">
                         <div class="form-group">
                             <label for="suppr_item" class="control-label">Supprimer un objet :</label>
                             <input type="number" name="suppr_submit" class="form-control form-control-sm" placeholder="numéro de l'objet à supprimer*">
                         </div>
                    </div>
        </div>
    </div>
 <button type="submit" name="supprimer_submit">Supprimer cet objet</button>
</form>

</br></br></br>

 <form class="inscrip form-horizontal" action="includes/vente_inc.php" method="POST">
 <button type="submit" name="afficher_submit">Afficher vos objets en vente</button>
</form> 

 <table>

    <tr>
        <th>Article</th>
        <th>Image</th>
        <th>Catégorie</th>
        <th>prix</th>
        <th>Modèle</th>
        <th>description</th>
    </tr>

        <?php
            if(!empty($_SESSION['items'])){

            foreach ($_SESSION['items'] as $key => $values) {

                ?>

                <tr>
                    <td><?php echo $values['id_item']; ?></td>
                    <td><?php echo $values['nom_item']; ?></td>
                    <td><?php echo $values['categorie']; ?></td>
                    <td><?php echo $values['prix']; ?></td>
                    <td><?php echo $values['modele']; ?></td>
                    <td><?php echo $values['description']; ?></td>
                </tr>

        <?php
            }

        }
        ?>
</table>


<br><br><br><br><br><br><br>
</main>


<?php
require "footer.php";
?>