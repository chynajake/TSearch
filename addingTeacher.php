<?php
		include "connection.php";
		$TName = $_POST['teacherName'];
		$sql = "INSERT INTO teachers VALUES (null, '$TName')";
		$resultAddingTeacher = $coon->query($sql);
		if(!$resultAddingTeacher){
			echo "NIO" . $coon->error;
		}else{
			header("Location:admin.php");
		}
?>