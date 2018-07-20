<?php
	session_start();
?>
<html>
<head>
	<style>
		#bg{
			margin:auto 0px;
			background-image:url("images/bgorders.jpg");
			background-size:contain;
			background-repeat:no-repeat;
			background-size:cover;
			background-color:#545456;

		}
		#display_div{
			margin-left:250px;
			height:60px;
			width: 1000px;
			background-color:#fff;
			opacity:0.6;
			border-bottom:2px solid #545456;
		}
		#header{
				height:65px;
				width:auto;
				background-color:#a50404;
				margin-bottom:50px;
		}
		#main_heading{
				position:absolute;
				left:50px;
				top:-25px;
				color:#fff;
				font-family:Viner Hand ITC Regular;
				font-size:40px;
		}
		#user_name{
				position:absolute;
				right:20px;
				color:#fff;			
		}
	</style>
</head>
<body id="bg">
	<div id="header">
			<h1 id="main_heading">Food Court</h1>
			<h2 id="user_name"><?php 
			echo $_SESSION["USERNAME"];
		 ?>	</h2>
	</div>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "canteen_management_system";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$UID=$_SESSION["UID"];
	$sql = "SELECT * FROM cart_table where u_id='$UID'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    
	    while($row = $result->fetch_assoc()) {
	    	$FOOD_ID=$row['food_id'];
	    	echo "..... " . $FOOD_ID;
	    	$sql1 = "SELECT * FROM cart_table where food_id='$FOOD_ID'";
			$result1 = $conn->query($sql);
			$row1=$result1->fetch_assoc();
	        echo "<div id='display_div'></div>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
	?>
</body>
</html>