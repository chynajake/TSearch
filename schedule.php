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