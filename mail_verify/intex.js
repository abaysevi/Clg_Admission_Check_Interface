
function sendEmail() {

	var email="abaysevi012@gmail.com"; //floatingInput is email id [changed]
    
	Email.send({
	Host: "smtp.gmail.com",
	Username : "admssthejus@gmail.com",
	Password : "admin@thejus12",
	To : email,
	From : "admssthejus@gmail.com",
	Subject : "OTP",
	Body : "THE OTP FOR VERIFIVATION IS",
	}).then(
		message => alert("mail sent successfully")
	);
	// startTimer(fiveMinutes, display);
}