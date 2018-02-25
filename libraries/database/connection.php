<?php

$server = "localhost";
$user	= "root";
$pass	= "";
$database_name = "libraries";

$db = mysqli_connect ($server, $user, $pass, $database_name);

if(!$db){
	die("fail to connect database sory".mysqli_connect_error());
}else{
	echo "";
}
?>