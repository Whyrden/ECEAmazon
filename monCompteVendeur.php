<?php
require "nav.php";
?>

<main>
    <?php
        $photoprofil = "img/photoprofil/".$_SESSION['photo_profil'];
    ?>  

     <br/>
    <br/>

    <h2 class="titre"> <img src="img/icon/boy.png" width="40" height="40"/>Votre compte<img src="img/icon/girl.png" width="40" height="40"/></h2>
    <br>

    <br><br>
    <div class="container">
        <div class="row">
            
            <div class="compte1">
        <img src="<?php echo $photoprofil ?>" width=150 height=150/>
    </div>
    <div class="compte2">

        <br>
       

       <?php
        if(isset($_SESSION['username_vendeur'])){
            echo "Nom d'utilisateur: ".$_SESSION['username_vendeur'],'<br>';
            echo "Nom: ".$_SESSION['nom'],'<br>';
            echo "Prenom: ".$_SESSION['prenom'],'<br>';
            echo "Email: ".$_SESSION['email'],'<br>';
            
        }
        ?>
         </p>
            
    
    </div>
    
    
        </div>
    </div>

    <br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">


<form method="post" action="includes/monCompteVendeur_inc.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Sélectionnez une image de profil:</td>
                        <td><input type="file" name="photo_profil"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                        <input type="submit" name="button1" value="Téléchargez"></td>

                    </tr>
                </table>

                </form>





<br><br><br><br><br><br><br>

<?php
require "footer.php";
?>