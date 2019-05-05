<?php

//chargement du panier (s'il existe) du client et du compte random s'il n'est pas connecté
session_start();
require"db_handle_inc.php";

if(isset($_GET["username_vendeur"]))
{
       //Tu recuperes l'id du contact
     $name = $_GET["username_vendeur"];
        
    echo $name;
     //Requete SQL pour supprimer le contact dans la base
    //$sql ='DELETE from liste_proprietaire WHERE nom="Tibo"';

    
    $lol ='DELETE FROM vendeurs WHERE username_vendeur = "'.$name.'"';

    // on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
    $resulti= mysqli_query($db_connect, $lol);
    
    if ($resulti == FALSE){
        
        echo "ECHEC DE LA CONNEXION MERDE";
        header("Location: ../gererVendeurs.php?echecConnexion");
    }
    
    else{
        


        echo "YES SUPPRIMER PTN";
                header('Location: ../includes/charger_vendeurs_inc.php?username_vendeur="daniel"');

    }
}
else{
    echo "nique ta mere";
            header("Location: ../gererVendeurs.php?rienamarche");

}




?>