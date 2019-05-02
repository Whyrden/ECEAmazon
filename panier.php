<?php
require "nav.php";
?>

<main>
    <?php
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
        <td>Article</td>
        <td>Image</td>
        <td>Categorie</td>
        <td>Prix unitaire</td>
        <td>Quantité</td>
        <td>Total</td>
    </tr>
    <tr>
        <td>Album f(x)</td>
        <td><img src="img/musique/kpop.png" width="30" height="30"</td>
        <td>Musique</td>
        <td>15€</td>
        <td>1</td>
        <td>15€</td>
    </tr>
        
    <tr>
        <td>Jean bleu</td>
        <td><img src="img/vetements/jean.jpg" width="30" height="30"</td>
        <td>Vetements</td>
        <td>30€</td>
        <td>1</td>
        <td>30€</td>
    </tr>
        

    </table> <br><br>
    
        <form class="form-inline promo30">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" id="promo" placeholder="Code promo">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Appliquer</button>
    </form>
    
        <p class="retour">Total : 45€</p>
        
    </tr>
    
    <button type="button" class="btn btn-success retour"><a href="livraison.php">Valider les achats</a></button>
    
</main>

<?php
require "footer.php";
?>