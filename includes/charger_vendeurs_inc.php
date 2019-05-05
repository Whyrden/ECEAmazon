<?php



session_start();
require"db_handle_inc.php";



if(isset($_POST['manage-people'])||(isset($_GET["username_vendeur"]))){
    
    $admin= $_SESSION['username_admin'];
    $sql2='SELECT * FROM vendeurs WHERE username_admin="'.$admin.'"';

}
else{
    header("Location: ../gererVendeurs.php?NON");
    exit();
}

$resultat=mysqli_query($db_connect,$sql2);
$i=1;


if(mysqli_num_rows($resultat)>0){
	$i=1;
    while($data=mysqli_fetch_array($resultat)){
		$vendeurs_array=array('username_vendeur' => $data['username_vendeur'],
		'email'=>$data['email'],
		'nom'=>$data['nom'],
		'prenom'=>$data['prenom']);

		$_SESSION['vendeurs'][$i]=$vendeurs_array;
		$i++;

	}
    
    /*if(isset($_GET["username_vendeur"]))
    {
        $tmp=$_SESSION['vendeurs'];
        $_SESSION['vendeurs']= array_pop($tmp);
        header("Location: ../gererVendeurs.php?OUIENFINPTN");
		exit();
    }
    
    else{
        header("Location: ../gererVendeurs.php?OUIENFINPTNNON");
		exit();
    }*/


    header("Location: ../gererVendeurs.php?OUIENFINPTN");
		exit();

}

else{
	header("Location: {$_SERVER['HTTP_REFERER']}?itemsvide!");
	exit();
}
	
		




					

?>