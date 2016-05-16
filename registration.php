<?php
		include "connection.php";
		$GName = $_POST['gName'];
		$sql = "INSERT INTO groups VALUES (null, '$GName')";
		$resultAddingGroup = $coon->query($sql);
		if(!$resultAddingGroup){
			echo "NIO" . $coon->error;
		}else{
			header("Location:admin.php");
		}
?>