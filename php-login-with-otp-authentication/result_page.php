<?php
session_start();
$conn = mysqli_connect("localhost","root","yoyoyo","emails");

$mark = $_SESSION['pcm_perc'];
$type=$_SESSION['admi_type'];
if ($type=="MGMT"){
    $mark=intval($mark);
    $result = mysqli_query($conn,"SELECT eql_fee from fee_struct_mgmt where pcm_perc=$mark;");	
    while($row = mysqli_fetch_array($result)) {
        $final=$row['eql_fee']; // Print a single column data     // Print the entire row data
    }

}
if ($type=="NRI"){
    $mark=intval($mark);
    $result = mysqli_query($conn,"SELECT eql_fee from fee_struct_nri where pcm_perc=$mark;");	

    while($row = mysqli_fetch_array($result)) {
        $final=$row['eql_fee']; // Print a single column data     // Print the entire row data
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,
        h1 {
			font-family: 'Brush Script MT', cursive;

        }

        body,
        html {
            height: 100%
			
        }

        input[type=submit] {
            background-color: #6E458C;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .bgimg {
            background-image: url('thejus.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }

        .main {
            font-size: 36px;
            font-weight: bold;
            Text-align: center;
        }

        .gfg {
            margin-left: 60px;
            border: 50px solid #8B7EDB;
            width: 300px;
            height: 200px;
            text-align: center;
            padding: 50px;
        }

        .gfg1 {
            font-size: 42px;
            font-weight: bold;
            color: #000000;
            background-color: #fff;
        }

        .gfg2 {
            font-size: 18px;
            font-weight: bold;
            background-color: #c5c5db;
        }

        .box {
    display: block;
    padding: 7em 13em;
    border-radius: 30px;
    background-color: rgb(225,225,225,.7);
}
    </style>
</head>

<body>


    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
    </div>
    <div class="box w3-display-middle">

            <h1 class="w3-jumbo w3-animate-top">
                <?php echo $final ?>
            </h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%">
            <p class="w3-large w3-center">wish You A Bright Future</p>
			<div>
                <form action="http://www.thejusengg.ac.in/">
                <input type="submit" value="Back to Home page" />
			</div>
        </form>
        </div>
	</body>

</html>