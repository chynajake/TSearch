
/*function hideSignIn() {
	x = document.getElementById("signUp");
    x.style.display = "none"
    background = document.getElementById("wrapperS");
    background.style.background: rgba(0, 0, 0, 0);
    background.style.display = "none"
}*/
function popSignIn() {
    x = document.getElementById("demo");
    background = document.getElementById("wrapperS");
    x.style.float = "right";
    x.style.background = "#FFFFFF";
    x.style.color = "red";
    x.innerHTML = "It fucking workds for now";
}
function navMove() {
    var elem = document.getElementById("nav");
    var pos = 128;
    var id = setInterval(frame, 20);
    function frame() {
        if (pos == 545) {
            clearInterval(id);
        } else {
            pos++;
            elem.style.left = pos + 'px';
        }
    }
}
/*
                <div class="signUp"><a onclick="popSignUp()"> Sign Up</a></div> 
                <div class="signIn" onclick="popSignIn()">Sign In /</div>*/