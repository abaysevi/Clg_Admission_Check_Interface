<!-- <!DOCTYPE html>
<html>
	
<head>
	<title>
ADMISSION ENQUIRY
	</title>
</head>

<body>
	
<?php
// include "menu.php";
// include "sendeamil.php";
// include "mail_tosend.php";
?>


	<form method="post">
	Email: <input type="text" name="email" id="email" ><br/>
	Verify: <input type="text" name="otp_verify" id="otp_verify" ><br/>

		

      <input type="submit" name="button2"
				class="button" value="CREATE TABLE" />
      
      <input type="submit" name="button3"
				class="button" value="ADD TO LIST" />
            <input type="submit" name="button1"
				class="button" value="SHHOW All" />
            <input type="submit" name="send_email"
				class="button" value="SEnd" />
            <input type="submit" name="verify"
				class="button" value="verify" />
         </form>
</head>

</html>

 -->


 <?php
// include "menu.php";
// include "sendeamil.php";
include "mail_tosend.php";

if(isset($_POST['submit'])){
	header("Location: info_coll.php");
	exit;
	}


?>

<!DOCTYPE html>
<html>

<head>
	<title></title>


	<!--Bootstrap CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
	<script src="intex.js"></script> -->
	<!-- <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script> -->
	<style>
		body{
			height: 100%;
		}

		.text-center {
			display: flex;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: auto;
		}

		#sentEmail-button {
			width: fit-content;
			position: absolute;
			left: 218px;
			top: 11px;
			padding: 5px;
			font-size: 15px;
		}

		#verify-otp{
			margin-top: 20px;
		}
		#error-message{
			color: red;
		}
		#otp-timer{
			margin-left: 1px;
			text-align: left;
			visibility: hidden;
		}
	</style>>
</head>
<!-- <body>  
	 <form method="post">
        <input type="email" id="email" placeholder="enter your email">
		<input type="button" value="Send Email" onclick="sendEmail()"/>
        <br>
		<div>enter the otp <span id="time">02:00</span> minutes!</div>
		<br>
        <input type="text" id="otp" placeholder="enter the otp recived">
		<p id="error_message" style="color:red"></p>
		<input type="button" value="verify" onclick="verify()"/>

	</form>   

</body> -->

<body class="text-center">



	<main class="form-signin">
		<form method="post">
			<img class="mb-4" src="http://www.thejusengg.ac.in/assets/images/thejus-logo.png" alt="" width="72"
				height="57">
			<h1 class="h3 mb-3 fw-normal">Please Verify</h1>

			<div class="form-floating">
				<input type="email" class="form-control email" id="floatingInput" placeholder="name@example.com" name="email">
				<label for="floatingInput">Email address</label>
				<button type="submit" class="btn btn-outline-primary" id="sentEmail-button" name="send_email">Sent OTP</button>
			</div>
			<!-- <div id="otp-timer">Enter the otp <span id="time">02:00</span> minutes!</div> -->
			<br>

			<div class="form-floating">
				<input type="text" class="form-control" id="floatingPassword" placeholder="OTP">
				<label for="floatingPassword">OTP</label>
				<p id="error-message" style="text-align:left ;"></p>
			</div>

			<!-- <div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div> -->
			<button class="w-100 btn btn-lg btn-primary" type="submit" id="verify-otp" onclick="verify();">verify</button>

			<!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
		</form>
	</main>



</body>

</html>