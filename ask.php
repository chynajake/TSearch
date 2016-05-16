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
	<div id="wrapper">
		<!-- This is Sign in form hidden until button is clicked -->
			<div id="signIn">
				<h1 align="center">Sign In</h1>
				<form action="http://www.google.com/search">
					NickName: <input name="nick" /> <br />
					Password:  <input name="nick" /> <br />
					<input type="submit" value="SignIn" />
				</form>
			</div>

			<!-- This is Sign Up form hidden until button is clicked -->
			<div id="signUp">
				<h1 align="center">Sign Up</h1>
				<form action="http://www.google.com/search">
					NickName: <input name="nick" /> <br />
					Name: <input name="nick" /> <br />
					Surname: <input name="nick" /> <br />
					Password: <input name="nick" /> <br />
					Password confirmation: <input name="nick" /> <br />
					E-adress: <input name="nick" /> <br />
					<input type="submit" value="SignUp" />
				</form>
			</div>

			
		<div class="sign">
			<button id="shit" onclick="popSignIn()"> Sign In </button>				
			<button id="shit" onclick="popSignUp()"> Sign Up </button>
		</div>
		<div class="name">TSearch</div>
		<div class="menu">
			<div class="menuElement"><a href="#">Find</a></div>
			<div class="menuElement"><a href="list.html">List</a></div>
			<div class="menuElement"><a href="ask.html">Ask</a></div>
			<div class="menuElement"><a href="schedule.html">MySchedule</a></div>
		</div>
		<div class="clear"></div>
		<div class="navigation">
			<div class="navElement"><a href="main.html">Main</a></div>
			<div class="navElement"><a href="classes.html">Classes</a></div>
			<div class="navElement"><a href="teachers.html">Teachers</a></div>
		</div>
		<div class="clear"></div>
		<div id="clock" class="time">Time</div>
			<script>
			renderTime();
			</script>
	</div>
</body>
</html>