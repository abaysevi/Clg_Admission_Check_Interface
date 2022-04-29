<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data collectd</title>

    <style>
        input[type=text] {
            width: 25%;
            padding: 10px 18px;
            margin: 8px 0;
            box-sizing: border-box;
}

        input[type=submit] {
            background-color: #3E5F8A;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        #student {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #student td,
        #student th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #student tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #student tr:hover {
            background-color: #ddd;
        }

        #student th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #0094ab;
            color: white;
        }
    </style>

</head>

<body>

    <form method="post">
        <!-- <br> -->
        <input type="submit" name="view_mails" value="View Emails" />

        <input type="submit" name="view_data" value="View Collected Data" />

        <br><br>

    </form>
</body>

</html>


<?php

function see_emails(){
    $conn = mysqli_connect("localhost","root","yoyoyo","emails");
    $result= mysqli_query($conn,"SELECT * FROM registerd_users;");
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table id=\"student\">"; // start a table tag in the HTML
        echo"<tr><th>". "Email"."</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['email']) ."</td></tr>";  //$row['index'] the index here is a field name
        }
        echo "</table>"; 
        echo"<form method=\"post\">";
        echo"<h2>Enter a Email to delete:</h2><input type=\"text\" name=\"email\">&nbsp&nbsp&nbsp&nbsp";
        echo"<input type=\"submit\" name=\"remove_email\" value=\"Remove Email\" />";
        echo"</form>";

    $conn->close();
    }
}

function see_data(){
    $conn = mysqli_connect("localhost","root","yoyoyo","emails");
    $result= mysqli_query($conn,"SELECT * FROM info_colll;");
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table id=\"student\">"; 
        echo "<tr><th>" . 
        "<strong>Hash Value</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". 
        "</th><th>" . "<strong>Name</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".
        "</th><th>" . "<strong>PCM MARK</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".
        "</th><th>" . "<strong>Admission Type</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .
        "</th><th>" . "<strong>Prefered Branch</strong>". "</th></tr>";  

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['hashval']) .
            "</td><td>" . htmlspecialchars($row['name']) .
             "</td><td>" . htmlspecialchars($row['PCM_percentage']) .
             "</td><td>" . htmlspecialchars($row['admi_type']) .
             "</td><td>" . htmlspecialchars($row['prefered_batch']) . 
             "</td></tr>";
        }
        echo "</table>";
        $conn->close();
        echo"<form method=\"post\">";
        echo"<h2>Enter a Hash Value to delete:</h2><input type=\"text\" name=\"del_hash\">&nbsp&nbsp&nbsp&nbsp";
        echo"<input type=\"submit\" name=\"remove_hash\" value=\"Remove Entry\" />";
        echo"</form>";
}
}

function remove_this_email(){
    
    if (!empty($_POST["email"])){
        $email=$_POST['email'];
        $conn = mysqli_connect("localhost","root","yoyoyo","emails");
        $result= mysqli_query($conn,"DELETE FROM registerd_users where email='".$email."';");
    }
    $conn->close();
}

function remove_this_entry(){
    if (!empty($_POST["del_hash"])){
        $hash_val=$_POST['del_hash'];
        $conn = mysqli_connect("localhost","root","yoyoyo","emails");
        $result= mysqli_query($conn,"DELETE FROM info_colll where hashval='".$hash_val."';");
    }
    $conn->close();
}


if(!empty($_POST["view_mails"])) {
    see_emails();
}
if(!empty($_POST["view_data"])) {
   see_data();
}

if(!empty($_POST["remove_email"])) {
    remove_this_email();
    see_emails();
    echo"<h3 style=\"color:red;\">*Item Deleted</h3>";
}

if(!empty($_POST["remove_hash"])) {
    remove_this_entry();
    see_data();
    echo"<h3 style=\"color:red;\">*Item Deleted</h3>";
}

?>