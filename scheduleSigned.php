<html>
<head><link rel ="stylesheet" type = "text/css" href="style.css">
	<style>
	.navigation {
		width: 10%;
	}
	.time {
		width: 12%;
	}
	</style>
	<script src="script.js"></script>
</head>
<body><?php include "control.php"; ?>
	<video id="bg" src="1.mp4" autoplay="true" loop="true" muted="true"></video>
	<div class="schedule">
		<h1><b id="title">1EN04C</b></h1>
		<p><b id="time">09:00 - 10:00</b><b id="lessonSC"> Physcis 1 </b><br>
		   <b id="time">10:00 - 11:00</b><b id="lessonSC"> Physics 1 </b><br>
		   <b id="time">11:00 - 12:00</b><b id="lessonSC"> Mathematcis for Computer Science </b><br>
		   <b id="time">12:00 - 13:00</b><b id="lessonSC"> Mathematcis for Computer Science</b><br>
		   <b id="time">13:00 - 14:00</b><b id="lessonSC"> Mathematcis for Computer Science</b><br>
		   <b id="time">14:00 - 15:00</b><b id="lessonSC"> Mathematcis for Computer Science</b><br>
		   <b id="time">15:00 - 16:00</b><b id="lessonSC"> Russian Language</b><br>
		</p>
		</p>
		</p>
		</p>
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