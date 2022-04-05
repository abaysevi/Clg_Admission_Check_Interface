<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

function generateNumericOTP($n) { 
    $generator = "1357902468";
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
    return $result;
}
$otp_tosend=generateNumericOTP(4);
global $otp_tosend;


if(array_key_exists('send_email', $_POST)) {
   email_verify();
}
if(array_key_exists('verify', $_POST)) {
    check_otp_verify();
}
// if ( ! empty($_POST['email'])){

//     addtotabel();
//  }
//  else{
//     echo"it cannot be empty<br>";
//  }

function email_verify(){
    global $otp_tosend;
    if ( ! empty($_POST['email'])){

        $sendemail = $_POST['email'];
        
        send_mail($otp_tosend,$sendemail);
     }
     else{
        echo"it cannot be empty<br>";
     }

}

function send_mail($otp_tosend,$sendemail){
    // global $eamill;


    
    $mail = new PHPMailer(true);

    //Enable SMTP debugging.
    $mail->SMTPDebug = 0;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = "admssthejus@gmail.com";                 
    $mail->Password = "admin@thejus12";                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to
    $mail->Port = 587;                                   

    $mail->From = "admssthejus@gmail.com";
    $mail->FromName = "thejus Clg";

    $mail->addAddress($sendemail);

    $mail->isHTML(true);
    #echo "3q3rqwefaew<br>";

    echo "$otp_tosend<br>";
    $mail->Subject = "OTP for Verifivcation";
    $mail->Body = "<p>OTP is: $otp_tosend</p>";


    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
function check_otp_verify(){
    if ( ! empty($_POST['otp_verify'])){

        otp_check();
     }
     else{
        echo"otp missing<br>";
     }
}
function otp_check(){
    $enterd_otp=$_POST['otp_verify'];
    global $otp_tosend;
    echo"$otp_tosend";
    if ($enterd_otp != $otp_tosend){
        echo"wrong otp";
    }
else{
    echo "otp matchs";
}
}

?>