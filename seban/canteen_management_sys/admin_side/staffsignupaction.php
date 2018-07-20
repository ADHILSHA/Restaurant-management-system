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
		
		$FIRSTNAME=$_POST['firstname'];
		$LASTNAME=$_POST['lastname'];
		$USERNAME=$_POST['username'];
		$PASSWORD=$_POST['password'];
		
		$sql = "INSERT INTO staff_registration_table (firstname,lastname,username,password)
		VALUES ('$FIRSTNAME','$LASTNAME','$USERNAME','$PASSWORD')";

		if ($conn->query($sql) === TRUE) {
		    echo "New staff was added sucessfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();


?>