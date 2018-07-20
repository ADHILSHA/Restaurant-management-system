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
		
		
		$EMAIL=$_POST['email'];
		
		$sql = "SELECT * FROM staff_registration_table where email='$EMAIL'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0)
		{
		   /* echo "You are sucessfully logged in";*/
		    session_start();
        // $_SESSION["is_logged_in"]=true;
        // $_SESSION["ID"]=$ret["id"];
         $_SESSION["EMAIL"]=$ret["email"];
         header('location:resetpassword.php');

		} else {
		    /*echo "Error: " . $sql . "<br>" . $conn->error;*/
		    echo "Invalid email";
		}

		
		$conn->close();


?>