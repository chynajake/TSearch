<html>
<head><link rel ="stylesheet" type = "text/css" href="style.css">
	<style>
	.navigation {
		width: 10%;
	}
	.time {
		width: 12%;
	}
	#group {
		border-bottom-left-radius: 0px;
		border-top-left-radius: 0px;
		border-bottom-right-radius: 20px;
		border-top-right-radius: 20px;
		width: 40%;
	}
	#teacher {
		width: 40%;
	}
	.teacherElement {
		height: 100%;
	}
	.groupElement {
		height: 100%;
	}
	p {text-align: center;}
	</style>
	<script src="script.js"></script>
</head>
<body>
	<?php
		include "control.php";
		include "connection.php";
		$sqlShit = "SELECT Duration, Lesson, GName, Teacher, WeekDay FROM duration WHERE WeekDay = 'Monday' AND Duration ='15:00 - 16:00' ORDER BY GName";
		$myresult = $coon->query($sqlShit);
		if(!$myresult){
			echo "NIO" . $coon->error;
		} 	
	?>
	<video id="bg" src="1.mp4" autoplay="true" loop="true" muted="true"></video>
	<div class="groups">
		<div class = "teacherElement" id="teacher">Name
			<?php while($myGroup = $myresult->fetch_array()){
			echo '
			<p>'.$myGroup['Teacher'].'</p>
			'; } ?>
		</div>
		<div class = "groupElement" id="group">Group
			<?php while($myGroup1 = $myresult->fetch_array()){
			echo '
			<p>'.$myGroup1['GName'].'</p>
			'; } ?>
		</div>
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