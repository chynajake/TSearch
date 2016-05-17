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
<body>
	<?php include "control.php"; ?>
	<video id="bg" src="1.mp4" autoplay="true" loop="true" muted="true"></video>
	<div id="wrapper">
		<div class="sign">
				<button id="shit"><a href="destroy.php"> Sign Out </a></button>				
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