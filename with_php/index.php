<!DOCTYPE html>
<html>
	
<head>
	<title>
		How to call PHP function
		on the click of a Button ?
	</title>
</head>

<body>
	
<?php
// include "menu.php";
// include "sendeamil.php";
include "mail_tosend.php";
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
