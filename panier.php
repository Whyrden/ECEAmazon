<?php
require "nav.php";
?>

<main>
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
        
    <tr>
        
        <td>Total</td>
        <td>45€</td>
        
    </tr>

    </table> <br><br>
    
    <button type="button" class="btn btn-success retour"><a href="livraison.php">Valider les achats</a></button>


	
	

</main>

<?php
require "footer.php";
?>