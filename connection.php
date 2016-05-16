<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "tsearch";
		// creating connection 
		$coon = new mysqli($servername, $username, $password, $dbname);
		// check connection 
		if($coon->connect_error) {
			die("Connection failed: " . $coon->connect_error);
		}
?>