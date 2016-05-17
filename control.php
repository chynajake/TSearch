<?php 
	session_start();
	if(empty($_SESSION['name'])){
		session_destroy();
		header("location:main.php");
	}
	else{ 
	$name = $_SESSION['name'];
	}
?>