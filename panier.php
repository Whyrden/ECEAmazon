<?php
require "nav.php";
?>

<main>
    <?php

    //Affiche un msg qui invite l'utilsateur à se co ou s'inscrire
    if(isset($_GET['error'])){

        if($_GET['error']=="noUser"){
            echo "<div class='alert alert-primary' role='alert'>
                 <a href='login.php' class='alert-link'>Connectez-vous </a> ou <a href='signup.php' class='alert-link'>Inscrivez-vous </a>
                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div>";
        }
    }
?>


<br/><br>
<h2 class="panier"><img src="img/icon/cart.png" height="30" width="30"/>  Votre panier <img src="img/icon/cart.png" height="30" width="30"/></h2>
				
    <br><br>
    
    
    
    <table>

    <tr>
        <th>Article</th>
        <th>Image</th>
        <th>Categorie</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>Total</th>
    </tr>

        <?php

        if(!empty($_SESSION['achats'])){
            foreach ($_SESSION['achats'] as $key => $values) {
                # code...
                ?>
                

                <tr>
                    <td><?php echo $values['nom_item']; ?></td>
                    <td><?php echo "vide"; ?></td>
                    <td><?php echo $values['categorie']; ?></td>
                    <td><?php echo $values['prix_commande']; ?></td>
                    <td><?php echo $values['quantite']; ?></td>
                    <td><?php echo $values['prix_commande']; ?></td>
                </tr>

        <?php
            }

        }
        ?>

       

    </table> <br><br>
    
        <form class="form-inline panier-promo">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" id="promo" placeholder="Code promo">
        </div>
        <button type="button" class="btn btn-primary mb-2" onClick="codePromo()">Appliquer</button>
    </form>
    
        <p class="retour">Total : <span id="result"><?php if(!empty($_SESSION['$prix_total']))echo $_SESSION['prix_total']; ?></span>€</p>
        
    
    <button type="button" class="btn btn-success retour"><a href="livraison.php">Valider les achats</a></button>
    
</main>


<?php
require "footer.php";
?>