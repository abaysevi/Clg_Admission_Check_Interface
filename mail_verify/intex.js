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
}






// var sent_otp=generateOTP()
// var nodemailer=require("nodemailer")
// function sendEmail() {
// 	var transporter = nodemailer.createTransport({
// 		service: 'gmail',
// 		auth: {
// 		  user: 'admssthejus@gmail.com',
// 		  pass: 'admin@thejus12'
// 		}
// 	  });

// 	  var mailOptions = {
// 		from: 'admssthejus@gmail.com',
// 		to: 'abaysevi@gmail.com',
// 		subject: 'Authentication mail',
// 		text: 'OTP is '+sent_otp,
// 	  };
	  
// 	  transporter.sendMail(mailOptions, function(error, info){
// 		if (error) {
// 		  console.log(error);
// 		} else {
// 		  console.log('Email sent: ' + info.response);
// 		}
// 	  });
// }

// sendEmail();

// "use strict";
// const nodemailer = require(["nodemailer"]);

// // async..await is not allowed in global scope, must use a wrapper
// async function main() {
//   // Generate test SMTP service account from ethereal.email
//   // Only needed if you don't have a real mail account for testing
//   let testAccount = await nodemailer.createTestAccount();

//   // create reusable transporter object using the default SMTP transport
//   let transporter = nodemailer.createTransport({
// 		service: 'gmail',

//     secure: false, // true for 465, false for other ports
//     auth: {
//         user: 'admssthejus@gmail.com',
//         		  pass: 'admin@thejus12' // generated ethereal password
//     },
//   });

//   // send mail with defined transport object
//   let info = await transporter.sendMail({
//     from: 'admssthejus@gmail.com', // sender address
//     to: "abaysevi@gmail.com", // list of receivers
//     subject: "Hello ✔", // Subject line
//     text: "Hello world?", // plain text body
//     html: "<b>Hello world?</b>", // html body
//   });

//   console.log("Message sent: %s", info.messageId);
//   // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>

//   // Preview only available when sending through an Ethereal account
//   console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));
//   // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...
// }

// main().catch(console.error);


