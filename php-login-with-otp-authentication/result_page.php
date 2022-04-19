<!DOCTYPE html>
<head>
	<title>CSS Box Model</title>
	<style>
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
		color: #009900;
		margin-top: 60px;
		background-color: #c5c5db;
	}
	
	.gfg2 {
		font-size: 18px;
		font-weight: bold;
		background-color: #c5c5db;
	}
	input[type=submit] {
	background-color: #C14319;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	}

	input[type=submit]:hover {
  	background-color: #5AD9E7;
	}
	</style>
	<?php
	session_start();
	$conn = mysqli_connect("localhost","root","yoyoyo","emails");

	$mark = $_SESSION['pcm_perc'];
		$mark=intval($mark);
		$result = mysqli_query($conn,"SELECT eql_fee from fee_struct where pcm_perc=$mark;");	

		while($row = mysqli_fetch_array($result)) {
			$final=$row['eql_fee']; // Print a single column data     // Print the entire row data
		}

	?>
</head>

<body>
	<center>
	<div class="main">title</div>
	<br><br>
	<div class="gfg">
		<h2><div >Your Fee will be</div></h2>
		<!-- <div class="gfg2"> -->
			<h1><?php echo $final ?></h1>
		</div>
	</div>
	<br>
	<form action="http://www.thejusengg.ac.in/">
    <input type="submit" value="Back to Home page" />
</form>
	</center>
</body>
</html>
