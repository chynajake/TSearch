<?php
		include "connection.php";
		$Duration = $_POST['duration'];
		$Lesson = $_POST['lesson'];
		$GName = $_POST['gName'];
		$TName = $_POST['teacherName'];
		$Room = $_POST['room'];
		$WeekDay = $_POST['weekday'];
		$sql = "INSERT INTO duration VALUES (null, '$Duration', '$Lesson', '$GName', '$TName', '$Room', '$WeekDay')";
		$resultCreateTT = $coon->query($sql);
		if(!$resultCreateTT){
			echo "NIO" . $coon->error;
		}else{
			header("Location:admin.php");
		}
?>