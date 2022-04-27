

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
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
    </style>

</head>
<body>

<form method="post">
    <!-- <br> -->
        <input type="submit" name="view_mails"
                value="View Emails"/>
    
        <input type="submit" name="view_data"
                value="View Collected Data"/>
    <br><br>
          
    </form>
</body>
</html>


<?php
if(!empty($_POST["view_mails"])) {
    $conn = mysqli_connect("localhost","root","yoyoyo","emails");
    $result= mysqli_query($conn,"SELECT * FROM registerd_users;");
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table>"; // start a table tag in the HTML

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['email']) ."</td></tr>";  //$row['index'] the index here is a field name

        }
        echo "</table>"; // start a table tag in the HTML


    $conn->close();
    }
}
if(!empty($_POST["view_data"])) {
    $conn = mysqli_connect("localhost","root","yoyoyo","emails");
    $result= mysqli_query($conn,"SELECT * FROM info_colll;");
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table>"; 
        echo "<tr><td>" . "<strong>NAME</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". "</td><td>" . "<strong>PCM MARK</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."</td><td>" . "<strong>Admission Type</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" ."</td><td>" . "<strong>Prefered Branch</strong>". "</td></tr>";  //$row['index'] the index here is a field name

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['PCM_percentage']) ."</td><td>" . htmlspecialchars($row['admi_type']) ."</td><td>" . htmlspecialchars($row['prefered_batch']) . "</td></tr>";
             
        }

        echo "</table>";
        $conn->close();
}
}

?>