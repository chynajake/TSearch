<?php
		include "connection.php";
		$ID = $_POST['ID'];
		$sql = "DELETE FROM `duration` WHERE ID = '$ID'";
		$resultDeleteRecord = $coon->query($sql);
		if(!$resultDeleteRecord){
			echo "NIO" . $coon->error;
		}else{
			header("Location:admin.php");
		}
?>