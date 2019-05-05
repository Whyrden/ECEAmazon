<!DOCTYPE html>
<html>
<head>
    <!--Bootstraps css--> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  

  <!--Jquery first then Bootstraps js-->          
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!--my CSS-->
  <link rel="stylesheet" type="text/css" href="monstyle.css"> 
</head>
</html>


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

        if(!empty($_SESSION['achats'])){//Affiche toutes les commandes du panier, ligne par ligne
            foreach ($_SESSION['achats'] as $key => $values) {
                # code...
                ?>
                

                <tr>
                    <td><?php echo $values['nom_item']; ?></td>
                    <td><img src="<?php echo $values['image']; ?>" width="50" height="50"></td>
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
    <?php
        if(isset($_GET['error']) && $_GET['error']=="wrongCode"){
             echo "<p class='ast'>Code erroné! Réessayez! </p>";
        }
        else if(isset($_GET['promo']) && $_GET['promo']=="activated"){
            echo "<p class='ast' style='color: green;'>Vous venez de bénéfincier d'une réduction de 25%. BRAVO! </p>";
        }
    ?>
    
        <form class="form-inline panier-promo" action="includes/charger_panier_inc.php" method="POST">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="promo" name="code_promo"placeholder="Code promo">
            </div>
            <button type="submit" class="btn btn-primary mb-2" onClick="codePromo()" name="promo_activate">Appliquer</button>
        </form>


        <p class="retour">Quantité totale :<?php if(!empty($_SESSION['quantite_totale']))echo $_SESSION['quantite_totale']; ?></p>
        <p class="retour">Total : <span id="result"><?php if(!empty($_SESSION['prix_total']))echo $_SESSION['prix_total']; ?></span>€</p>
        
    
    <button type="button" class="btn btn-success retour"><a href="livraison.php">Valider les achats</a></button>
    
</main>


<?php
require "footer.php";
?>
