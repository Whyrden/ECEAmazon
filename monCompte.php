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
        if(isset($_SESSION['username'])){
            echo "Nom d'utilisateur: ".$_SESSION['username'],'<br>';
            echo "Nom: ".$_SESSION['nom'],'<br>';
            echo "Prenom: ".$_SESSION['prenom'],'<br>';
            echo "Date de naissance: ".$_SESSION['naissance'],'<br>';
            echo "Email: ".$_SESSION['email'],'<br>';
            echo "Ville: ".$_SESSION['ville'],'<br>';
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