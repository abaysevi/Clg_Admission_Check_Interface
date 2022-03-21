// //index.js  
function generateOTP() {
          
    var digits = '0123456789';
    let OTP = '';
    for (let i = 0; i < 4; i++ ) {
        OTP += digits[Math.floor(Math.random() * 10)];
    }
    return OTP;
}

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}


var a=generateOTP()
function sendEmail() {
	var email=document.getElementById('email').value;
    
	Email.send({
	Host: "smtp.gmail.com",
	Username : "admssthejus@gmail.com",
	Password : "admin@thejus12",
	To : email,
	From : "admssthejus@gmail.com",
	Subject : "OTP",
	Body : "THE OTP FOR VERIFIVATION IS"+a,
	}).then(
		message => alert("mail sent successfully")
	);
	// startTimer(fiveMinutes, display);
	var fiveMinutes = 60 * 2,
	display = document.querySelector('#time');
startTimer(fiveMinutes, display);
}
function verify(){
	var entered_otp=document.getElementById("otp").value
	if (entered_otp==a){
		console.log("all set");
		alert("otp verified");
	}
	else{
		document.getElementById("otp").style.border = "2px solid red"
		document.getElementById("error_message").innerHTML = "Wrong OTP, Enter email again"
		// document.getElementById("otp").value=""
		// location.reload()
		// var delayInMilliseconds = 2000; //1 second

		// setTimeout(function() {
		// 	document.getElementById("otp").value=""
		// 	document.getElementById("otp").style.border = "1px solid black"
		// 	document.getElementById("error_message").innerHTML = ""
		// }, delayInMilliseconds);
		
	}
}