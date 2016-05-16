<html>
<head>
	<link rel ="stylesheet" type = "text/css" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	<video id="bg" src="1.mp4" autoplay="true" loop="true" muted="true"></video>
		<div id="wrapper" .box>
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