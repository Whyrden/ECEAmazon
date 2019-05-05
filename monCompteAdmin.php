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
        if(isset($_SESSION['username_admin'])){
            echo "Nom d'utilisateur: ".$_SESSION['username_admin'],'<br>';
            echo "Nom: ".$_SESSION['nom'],'<br>';
            echo "Prenom: ".$_SESSION['prenom'],'<br>';
        }
        ?>
         </p><br><br>
            

            
    </div>
    <div style="margin-left:20%;">
                <form method="post" action="includes/monCompteAdmin_inc.php" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Sélectionnez une image de profil:</td>
						<td><input type="file" name="photo_profil"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
 						<input type="submit" name="button1" value="Téléchargez"></td>

					</tr>
				</table><br><br>

</form>
        </div>
        
        <div style="margin-left:37%;">
        <!--Gestionnaire de vendeurs-->
            <form method="POST" action="includes/charger_vendeurs_inc.php">
                <div>
                    <button type="submit" class="btn btn-success " name="manage-people" >Gerer les vendeurs</button>
                    
                    <!--Gere les items-->
            <button type="button" class="btn btn-success " name="manage-items"><a href="gererArticles.php">Gerer les articles</a></button>

                    
                </div>

            </form>
         
                
        </div>
    
        </div>
    </div>

    <br><br><br>



                
<br>
                

                




            </div></div></div>

<br><br><br><br><br><br><br>






</main>

<?php
require "footer.php";
?>