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

    <br><br><h1 class="panier">Tous vos vendeurs vendeurs</h1><br>
    
    <table>
        <tr>
            <th>Nom d'utilisateur</th>
            <th>Email</th>
            <th>Nom</th>
            <th>prenom</th>
            <th></th>
        </tr>
        
        <?php
        
        if (!empty($_SESSION['vendeurs'])){
            
            foreach ($_SESSION['vendeurs'] as $key => $values){
                ?>
        
        <tr>
            <td><?php echo $values['username_vendeur'];?></td>
            
            <td><?php echo $values['email'];?></td>
            
            <td><?php echo $values['nom'];?></td>
            
            <td><?php echo $values['prenom'];?></td>
            
            <td><button type="submit" class="btn btn-danger"><a href="includes/admin_vendeur_inc.php?username_vendeur=<?php echo $values['username_vendeur']; ?>">Supprimer</a></button></td>
        
        </tr>
        
        <?php
            }
        }
        
        else{
            
            echo '<p>Non desole</p>';
        }
        ?>
    
    </table><br><br><br>

</main>

<?php
require "footer.php";
?>