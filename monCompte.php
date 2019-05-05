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
	
    <br/>
    <br/>
    <h2 class="titre"><img src="img/icon/boy.png" width="40" height="40"/>Votre compte<img src="img/icon/girl.png" width="40" height="40"/></h2>
    <br><br><br>
    <!--inserer info bdd-->
    
    <div class="container">
		<div class="row">
            
            <div class="compte1">
        <img src="img/icon/girl.png" width=150 height=150/>
    </div>
    <div class="compte2">

        <br>
        <?php
        if(isset($_SESSION['username_client'])){
            echo "Nom d'utilisateur: ".$_SESSION['username_client'],'<br>';
            echo "Nom: ".$_SESSION['nom'],'<br>';
            echo "Prenom: ".$_SESSION['prenom'],'<br>';
            echo "Date de naissance: ".$_SESSION['naissance'],'<br>';
            echo "Email: ".$_SESSION['email'],'<br>';
            echo "Adresse: ".$_SESSION['adresse'];echo" ".$_SESSION['codePostal'];echo" ".$_SESSION['ville'];echo" ".$_SESSION['pays'],'<br>';
            echo "Telephone: ".$_SESSION['telephone'],'<br><br><br>';

                if(isset($_SESSION['numero'])){

                //Afficher les données de la cb
                echo "Numéro de carte: xx".$_SESSION['numero']."xx",'<br>';
                echo "Type: ".$_SESSION['type'],'<br>';
                echo "Date d'expiration: ".$_SESSION['expiration'],'<br>';
                //echo "Code: ".$_SESSION['code'],'<br>'; //On n'affiche pas le code secret quand même oh !!!
                echo "Proprietaire: ". $_SESSION['proprietaire'];
                }


            
        }
        else{

        }
        ?>
                
            
    
    </div>
    
    
        </div>
    </div>
    <br><br><br><br><br><br><br>
    
	

</main>

<?php
require "footer.php";
?>