<?php
		include "connection.php";
		$ID = $_POST['teacherName'];
		$sql = "DELETE FROM duration WHERE ";
		$result = $coon->query($sql);
		if(!$result){
			echo "NIO" . $coon->error;
		}else{
			header("Location:admin.php");
		}
?>