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
		<!-- This is Sign in form hidden until button is clicked -->
			<div id="signIn">
				<h1 align="center">Sign In</h1>
				<form action="registration.php">
					NickName: <input name="nickName" type="text"/> <br />
					Password:  <input name="password" type="password" /> <br />
					<input type="submit" value="SignIn" />
				</form>
			</div>


		<div class="sign">
			<button id="shit" onclick="popSignIn()"> Sign In </button>	
		</div>
		<div class="name">TSearch</div>
		<div class="menu">
			<div class="menuElement"><a href="#">Find</a></div>
			<div class="menuElement"><a href="list.php">List</a></div>
			<div class="menuElement"><a href="ask.php">Ask</a></div>
			<div class="menuElement"><a href="schedule.php">MySchedule</a></div>
		</div>
		<div class="clear"></div>
		<div class="navigation">
			<div class="navElement"><a href="main.php">Main</a></div>
			<div class="navElement"><a href="classes.php">Classes</a></div>
			<div class="navElement"><a href="teachers.php">Teachers</a></div>
		</div>
		<div class="clear"></div>
		<div id="clock" class="time">Time</div>
			<script>
			renderTime();
			</script>
	</div>
</body>
</html>