<?php
	session_start();
?>
<html>
	<head>
		<style>
		#bg{
			overflow-x:hidden;
			background-image:url("images/background.jpg");
			background-size:cover;
			margin: auto 0px;
		}
		#item{
				background-color:#2a2c30;
				opacity:0.7;
				height:400px;
				width:347;
				/*border-bottom:5px solid #fff;
				border-right:5px solid #fff;*/
				border:5px solid #fff;
				position:relative;
				left:35px;
				top:10px;
				display:inline-block;
			}
			#food_name{
				position:relative;
				top:60px;
				left:-80px;
				font-size:30px;
				color:#fff;
			}
			#food_price{
				position:relative;
				top:60px;
				left:160px;
				font-size:20px;
				color:#fff;
			}
			#order_btn{
				position:relative;
				top:90px;
				left:110px;
				font-size:20px;
				background-color:#fff;
				border-radius:10px;
				height:40px;
				outline:none;
			}
			#header{
				height:65px;
				width:auto;
				background-color:#a50404;
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
			#ordersbtnstyler{
				position:fixed;
				bottom:40px;
				right:40px;
				height:100px;
				width:100px;
				border-radius:100px;
				background-color:#ce1306;
				color:#fff;
				outline:none;
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
			$sql="select * from food_table";
			$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) > 0){
			 while($row = $result->fetch_assoc()) {
			 	
			 	$echo=$row['food_name'];
				$price=$row['price'];
				/*$_SESSION["F_ID"]=$row['food_id'];
				$_SESSION["PRICE"]=$row['price'];*/
       			$_SESSION["U_ID"]=$_SESSION["UID"];	
			/*echo "<div id='item'><img style='position:relative;left:70px;top:10px;border-radius:75px;'; src='items/".$echo.".jpg' alt=".$echo." height='50%' width='60%'><label id='food_name'>" .$row['food_name']. "</label><br><label id='food_price'>&#8377;".$price."</label><br><form name='add_to_cart' method='post' action='add_to_cart.php'><input id='order_btn' type='submit' value='Add to Cart'></form></div>";*/


			/*echo "<div id='item'><img style='position:relative;left:70px;top:10px;border-radius:75px;'; src='items/".$echo.".jpg' alt=".$echo." height='50%' width='60%'><label id='food_name'>" .$row['food_name']. "</label><br><label id='food_price'>&#8377;".$price."</label><br><form name='add_to_cart' method='post' action='add_to_cart.php'><input id='order_btn' type='submit' value='Add to Cart'></form></div>";*/
			
			echo "<div id='item'><form name='add_to_cart' method='post' action='add_to_cart.php'><img style='position:relative;left:70px;top:10px;border-radius:75px;'; src='items/".$echo.".jpg' alt=".$echo." height='50%' width='60%'><label id='food_name'>" .$row['food_name']. "</label><br><label id='food_price'>&#8377;".$price."</label><br><input id='order_btn' type='submit' value='Add to Cart'></form></div>";
       		
       		//echo "food id::" . $row['food_id'];
			//echo "food price::" .$row['price'];
       			
       			
       			

       			}
       		}
  
			else{
			    echo "0 results";
			}
			$conn->close();
		?>
		
			
			<form method="post" action="order.php">
				<input id='ordersbtnstyler'type='submit' value='order'>
			</form>
		
	</body>
</html>