<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'eariadb');

//connect to the database
$conn = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if($conn === false){
	die("Error: connection error. " . mysqli_connect_error());
}


?>