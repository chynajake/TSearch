<html>
<head><link rel ="stylesheet" type = "text/css" href="style.css">
	<style>
	.navigation {
		width: 10%;
	}
	.time {
		width: 12%;
	}
	#room {
 	border-top-right-radius: 0px;
 	border-bottom-right-radius: 0px; 	
 	}

	</style>
	<script src="script.js"></script>
</head>
<body>
	<video id="bg" src="1.mp4" autoplay="true" loop="true" muted="true"></video>
	<?php
		include "control.php";
		include "connection.php";
		$sqlViewTeacherMonday = "SELECT Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Monday' AND Duration='13:00 - 14:00' ORDER BY Teacher";
		$resultViewTeacher = $coon->query($sqlViewTeacherMonday);
		if(!$resultViewTeacher){
			echo "NIO" . $coon->error;
		} 	
	?>
	<div class="teachers">
		<?php while($TeacherView = $resultViewTeacher->fetch_array()){
			echo '
		<div class = "teacherElement" id="teacher">Name
			<p>'.$TeacherView['Teacher'].'</p>
		</div>
		<div class = "teacherElement" id="available">Lesson
			<p>'.$TeacherView['Lesson'].'</p>
		</div>
		<div class = "teacherElement" id="duration">Duration
			<p>'.$TeacherView['Duration'].'</p>
		</div>
		<div class = "teacherElement" id="room">Room
			<p>'.$TeacherView['Room'].'</p>
		</div>
		<div class = "teacherElement" id="ava">Free/Busy
			<p id="busy"> Busy </p>
		</div>'; }?>
	</div>

	<div id="wrapper">
		<div class="sign">
				<a href="destroy.php"> Sign Out </a>				
		</div>
		<div class="name">TSearch</div>
		<div class="menu">
			<div class="menuElement"><a href="#">Find</a></div>
			<div class="menuElement"><a href="listSigned.php">List</a></div>
			<div class="menuElement"><a href="askSigned.php">Ask</a></div>
			<div class="menuElement"><a href="scheduleSigned.php">MySchedule</a></div>
		</div>
		<div class="clear"></div>
		<div class="navigation">
			<div class="navElement"><a href="mainSigned.php">Main</a></div>
			<div class="navElement"><a href="classesSigned.php">Classes</a></div>
			<div class="navElement"><a href="teachersSigned.php">Teachers</a></div>
		</div>
		<div class="clear"></div>
		<div id="clock" class="time">Time</div>
			<script>
			renderTime();
			</script>
	</div>
</body>
</html>