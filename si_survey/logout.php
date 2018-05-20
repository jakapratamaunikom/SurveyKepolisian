<?php
	ob_start();
	session_start();
	unset($_SESSION['nama']);
	unset($_SESSION['username']);
	
	header("Location:index.php");
	ob_end_flush();
?>