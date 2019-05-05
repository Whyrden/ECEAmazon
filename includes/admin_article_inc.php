<?php

//chargement du panier (s'il existe) du client et du compte random s'il n'est pas connecté
session_start();
require"db_handle_inc.php";

if(isset($_GET["id_item"]))
{
      //Tu recuperes l'id du contact
     $id = $_GET["id_item"];
        
    echo $id;
     //Requete SQL pour supprimer le contact dans la base
    //mysql_query("DELETE FROM items WHERE id_item = ".$id );
    $taRace ="DELETE FROM items WHERE id_item = ".$id;

    // on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
    $resulti= mysqli_query($db_connect, $taRace);
    
    if ($resulti == FALSE){
        
        echo "ECHEC DE LA CONNEXION MERDE";
        header("Location: ../gererArticles.php?echecConnexion");
    }
    
    else{
        echo "YES SUPPRIMER PTN";
                header("Location: ../gererArticles.php?supp");

    }

}
else{
    echo "nique ta mere";
            header("Location: ../gererArticles.php?rienamarche");

}




?>