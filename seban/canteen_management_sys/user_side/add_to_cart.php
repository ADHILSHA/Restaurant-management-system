<?php 
	session_start();
?>
<html>
<body>
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
		$FOOD_ID=$_SESSION["F_ID"];
		$PRICE=$_SESSION["PRICE"];
		$UID=$_SESSION["U_ID"];
		//$_SESSION["UID"]=$UID;
		$sql = "INSERT INTO cart_table (food_id, u_id, price)
			VALUES ('$FOOD_ID', '$UID', '$PRICE')";
			if ($conn->query($sql) === TRUE) {

			     header("Location: view_food.php");
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
$conn->close();

		//header('location:view_food.php');
	?>
</body>
</html>