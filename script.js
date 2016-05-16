function popSignIn() {
	    signIn = document.getElementById("signIn");
	    signUp = document.getElementById("signUp");
	    background = document.getElementById("wrapper");
	    signIn.style.display = "block";
	    signUp.style.display = "none";
	    background.style.background = "rgba(0, 0, 0, 0.75)";
	}
function popSignUp() {
		signUp = document.getElementById("signUp");
		signIn = document.getElementById("signIn");
	    background = document.getElementById("wrapper");
	    signUp.style.display = "block";
	    signIn.style.display = "none";
	    background.style.background = "rgba(0, 0, 0, 0.75)";
	    /*x.style.float = "right";
	    x.style.background = "#FFFFFF";
	    x.style.color = "red";
	    x.innerHTML = "It fucking works for now";*/
	}	
function renderTime() {
	var currentTime = new Date();
	var diem = "AM";
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
	var s = currentTime.getSeconds();

	if(h == 0) {
		h == 12;
	}
	else if(h > 12) {
		h = h - 12;
		diem = "PM"
	}
	if (h < 10) {
		h = "0" + h;
	}
	if (m < 10) {
		m = "0" + m;
	}
	if (s < 10) {
		s = "0" + s;
	}
	var myClock = document.getElementById("clock");
	myClock.textContent = h + ":" + m + ":" + s + " " + diem;
	setTimeout('renderTime()', 1000);
}
