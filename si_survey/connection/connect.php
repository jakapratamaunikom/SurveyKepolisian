<?php
$host = "localhost";
$db = "si_survey";
$pass = "";
$username = "root"; 

$connect = mysqli_connect($host, $username, $pass, $db);

if(mysqli_connect_errno()){
	echo 'Gagal Terhubung dengan Database : '. mysqli_connect_error();
}
	else{
	
	}
?>