<html>
	<head>
		<style>
			#bg{
				margin:auto 0px;
			}
			#item{
				background-color:#d9dce0;
				height:400px;
				width:auto;
				border-bottom:2px solid red;
				/*position:relative;
				left:10px;
				top:10px;
				display:inline-block;*/
			}
			#heading{
				font-family:cursive;
				font-size:40px;
				position:relative;
				left:600px;

			}
			#food_name{
				position:relative;
				bottom:-5px;
				left:80px;
				font-size:30px;

			}
		</style>
	</head>
	<body id="bg">
		<h2 id="heading">Todays special</h2>

		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "canteen";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			$sql="select * from food";
			$result = mysqli_query($conn, $sql);
			$count=0;
			if (mysqli_num_rows($result) > 0){
			 while($row = $result->fetch_assoc()) {
			 	
			 	$echo=$row['NAME'];
			
			echo "<div id='item'><img src='images/".$echo.".jpg'><label id='food_name'>" .$row['NAME']. "</label><a href='order.php'><button>Order</button></a></div>";
       		}
       		
       			}
       		
			else{
			    echo "0 results";
			}
			$conn->close();
		?>
	</body>
</html>