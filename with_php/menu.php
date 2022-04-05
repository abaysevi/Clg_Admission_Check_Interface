<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('emails.db');
      }
   }

   //   $db->close();


   if(array_key_exists('button2', $_POST)) {
            button2();
        }
   if(array_key_exists('button3', $_POST)) {
         button3();
     }
     if(array_key_exists('button1', $_POST)) {
      selectall();
  }



function button2() {
   $db = new MyDB();
   if(!$db) {  
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      CREATE TABLE Emails
      (Email        CHAR(50));
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
}

function button3() {

   if ( ! empty($_POST['email'])){

      addtotabel();
   }
   else{
      echo"it cannot be empty<br>";
   }


}
function addtotabel(){
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   $email = $_POST['email'];
   $sql =<<<EOF
      INSERT INTO Emails (Email)
      VALUES ('$email');
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {

      echo "data added created successfully\n";
   }
   $db->close();
}


function selectall(){
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br>";
   }

   $sql =<<<EOF
      SELECT * from Emails;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {

      echo "Email = ". $row['Email'] ."<br>";
   }
   echo "Operation done successfully\n";
   $db->close();
}

?>