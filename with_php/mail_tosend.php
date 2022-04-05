<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('otp.db');
      }
   }

   function generateNumericOTP($n) { 
    $generator = "1357902468";
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
    return $result;
}
//    $db = new MyDB();
//    if(!$db) {  
//       echo $db->lastErrorMsg();
//    } else {
//       echo "Opened database successfully\n";
//    }

//    $sql =<<<EOF
//       CREATE TABLE otp
//       (otps        INT);
// EOF;

//    $ret = $db->exec($sql);
//    if(!$ret){
//       echo $db->lastErrorMsg();
//    } else {
//       echo "Table created successfully\n";
//    }
//    $db->close();
// 


$db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $otp_tosend=generateNumericOTP(4);
   $sql =<<<EOF
      INSERT INTO otp (otps)
      VALUES ('$otp_tosend');
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {

      echo "data added created successfully\n";
   }
   $db->close();

?>