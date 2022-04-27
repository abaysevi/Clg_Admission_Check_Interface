<?php
session_start();
$errnameMsg="";
$errpercmsg="";
$nameset=false;
$isnamealpha=false;
$percset=false;
$ispercnum=false;
$ispercb100=false;
// $conn = mysqli_connect("localhost","root","yoyoyo","emails");
function go_ahead(){
  $conn = mysqli_connect("localhost","root","yoyoyo","emails");
  $name=$_POST["name"];
  $perc=$_POST["perc"];
  $admin_type=$_POST["type"];
  $pref_branch=$_POST["brach"];
  $result = mysqli_query($conn,"INSERT INTO info_colll(name,PCM_percentage,admi_type,prefered_batch) VALUES ('".$name."','".$perc."','".$admin_type."','".$pref_branch."')");
  $_SESSION['pcm_perc'] = $perc;
  header("Location: result_page.php");
}
if(!empty($_POST["Submit_info"])) {
  if (empty($_POST["name"])){
    $errnameMsg = "*enter the name"; 
  } 
  else{
  $nameset=true;
  }
  if (!preg_match ("/^[a-zA-z\s]*$/", $_POST["name"]) ) {  
      $errnameMsg = "*only alphabets and whitespace are allowed.";
    }
  else{
    $isnamealpha=true;

  } 
  if (empty($_POST["perc"])){
   $errpercmsg="*enter the percentage mark";
  }
  else{
  $percset=true;
  }
  if (preg_match ("/^[a-zA-z\s]*$/", $_POST["pcm_perc"]) ) {  
    $ispercnum= "*only numbers";
  }
else{
  $ispercnum=true;

}
  if ($_POST["perc"]>=100){
    $errpercmsg="the value must be below 100 or 100";
  }
  else{
    $ispercb100=true;
  }
  if ($nameset and $isnamealpha and $ispercnum and $ispercb100 and $percset){
    go_ahead($_POST["name"],$_POST["brach"],$_POST["type"],$_POST["perc"]);
  }
}

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
    background-color: #6E458C;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h1>Contact Form</h1>

<div class="container">
  <form method="post" action="">
    <label for="name">Name</label>
    <br>
    <?php
    echo $errnameMsg;
    ?>
    <br>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <br>
    <label for="pcm_perc">PCM (PHYSIC CHEMISTRY MATHS) MARKS PERCENTAGE</label>
    <br>
    <?php
    echo $errpercmsg;
    ?>
    <br>
    <input type="text" id="perc" name="perc" placeholder="Enter your PERCENTAGE">
    <br>

    <br>
    <label for="type">Type</label>
    <br>

    <select id="type" name="type">
      <option value="MGMT">MANAGEMET</option>
      <option value="NRI">NRI</option>
    </select>
    <br>
    <label for="brach">Preferd branch</label>
    <br>

    <select id="branch" name="brach">
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="ME">ME</option>
      <option value="CE">CE</option>
      <option value="EEE">EEE</option>

    </select>
    <br>
    <input type="submit" value="Submit" name="Submit_info">
  </form>
</div>
</body>
</html>
