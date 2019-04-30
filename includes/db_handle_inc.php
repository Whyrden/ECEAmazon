<?php
define('db_server','localhost');
define('db_username','root');
define('db_pass','');

$database="loginsystem";

$db_connect=mysqli_connect(db_server,db_username,db_pass,$database);

if(!$db_connect){
	die("Connection failed".mysqli_connect_error());
}
else{
	echo "Connection db ok";
}


?>