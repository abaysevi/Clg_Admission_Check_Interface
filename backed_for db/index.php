<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackEnd DATA</title>

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

        <input type="submit" name="btn_see_nri_fee" value="Add NRI Fee Struct" />

        <input type="submit" name="btn_see_mgmt_fee" value="Add MGMT Fee Struct" />


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

function see_nri_fee(){

    $conn = mysqli_connect("localhost","root","yoyoyo","emails");
    $result= mysqli_query($conn,"SELECT * FROM fee_struct_nri;");
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table id=\"student\">"; 
        echo "<tr><th>" . 
        "<strong>PCM MARK</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". 
        "</th><th>" . "<strong>Respected FEE</strong>". "</th></tr>";  

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['pcm_perc']) .
             "</td><td>" . htmlspecialchars($row['eql_fee']) . 
             "</td></tr>";
        }
        echo "</table>";
        $conn->close();


    }
    echo"<form method=\"post\">";
    echo"<h3>Enter PCM MARK:</h3><input type=\"text\" name=\"pcm_mark_nri\">&nbsp&nbsp&nbsp&nbsp";//TextBox For PCM Mark
    echo"<h3>Eter EQL NRI FEE:</h3><input type=\"text\" name=\"resp_fee_nri\">&nbsp&nbsp&nbsp&nbsp";
    echo"<input type=\"submit\" name=\"btn_add_nri_fee\" value=\"Add Entry\" />";
    echo"</form>";

}

function see_mgmt_fee(){

    
    $conn = mysqli_connect("localhost","root","yoyoyo","emails");
    $result= mysqli_query($conn,"SELECT * FROM fee_struct_mgmt;");
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table id=\"student\">"; 
        echo "<tr><th>" . 
        "<strong>PCM MARK</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". 
        "</th><th>" . "<strong>Respected FEE</strong>". "</th></tr>";  

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['pcm_perc']) .
             "</td><td>" . htmlspecialchars($row['eql_fee']) . 
             "</td></tr>";
        }
        echo "</table>";
        $conn->close();

    }
    echo"<form method=\"post\">";
    echo"<h3>Enter PCM MARK:</h3><input type=\"text\" name=\"pcm_mark_mgmt\">&nbsp&nbsp&nbsp&nbsp";//TextBox For PCM Mark
    echo"<h3>Eter Eql MGMT Fee:</h3><input type=\"text\" name=\"resp_fee_mgmt\">&nbsp&nbsp&nbsp&nbsp";
    echo"<input type=\"submit\" name=\"btn_add_mgmt_fee\" value=\"Add Entry\" />";
    echo"</form>";
}

function add_mgmt_fee(){
    if (!empty($_POST["pcm_mark_mgmt"]) and !empty($_POST["resp_fee_mgmt"]) ){
        $pcm_mark=$_POST['pcm_mark_mgmt'];
        $resp_fee=$_POST['resp_fee_mgmt'];
        $conn = mysqli_connect("localhost","root","yoyoyo","emails");
        $result= mysqli_query($conn,"INSERT INTO fee_struct_mgmt(pcm_perc,eql_fee) values('".$pcm_mark."','".$resp_fee."')");
        $conn->close();

    }

}

function add_nri_fee(){
    if (!empty($_POST["pcm_mark_nri"]) and !empty($_POST["resp_fee_nri"]) ){
        $pcm_mark=$_POST['pcm_mark_nri'];
        $resp_fee=$_POST['resp_fee_nri'];
        $conn = mysqli_connect("localhost","root","yoyoyo","emails");
        echo"set";
        $result= mysqli_query($conn,"INSERT INTO fee_struct_nri(pcm_perc,eql_fee) values('".$pcm_mark."','".$resp_fee."')");
        $conn->close();
    }


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
if(!empty($_POST["btn_see_nri_fee"])) {
see_nri_fee();
}

if(!empty($_POST["btn_see_mgmt_fee"])) {
    see_mgmt_fee();
}

if(!empty($_POST["btn_add_mgmt_fee"])) {
    add_mgmt_fee();
    see_mgmt_fee();
    echo"<h3 style=\"color:green;\">*Item Added</h3>";


}

if(!empty($_POST["btn_add_nri_fee"])) {
    add_nri_fee();
    see_nri_fee();
    echo"<h3 style=\"color:green;\">*Item Added</h3>";



}

?>