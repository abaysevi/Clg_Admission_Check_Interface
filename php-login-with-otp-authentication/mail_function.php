<?php	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendOTP($email,$otp) {


		require_once "vendor/autoload.php";
	
		$message_body = "One Time Password for Email Verification is  is:<br/><br/>" ."<strong>".$otp."</strong>";
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = 587;
		$mail->Username = "admssthejus@gmail.com";
		$mail->Password = "admin@thejus12";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("FROM EMAIL", "FROM NAME");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}

function sendNotif($name1,$perc1,$admin_type1,$pref_branch1,$hash_val1) {


		require_once "vendor/autoload.php";
	
		$message_body =
		"<head>

    <style>
        #student {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #student tr {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;
			color: white;
			border-bottom: 1pt solid black;

		  }
    </style>

</head>".
"<table id=\"student\">"."<tr><td>" . htmlspecialchars($hash_val1) .
		"</td><td>" . htmlspecialchars($name1) .
		 "</td><td>" . htmlspecialchars($perc1) .
		 "</td><td>" . htmlspecialchars($admin_type1) .
		 "</td><td>" . htmlspecialchars($pref_branch1) . 
		 "</td></tr>"."</table>";
		$email_here="abaysevi@gmail.com";
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = 587;
		$mail->Username = "admssthejus@gmail.com";
		$mail->Password = "admin@thejus12";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("FROM EMAIL", "FROM NAME");
		$mail->AddAddress($email_here);
		$mail->Subject = "Contact Added";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
?>