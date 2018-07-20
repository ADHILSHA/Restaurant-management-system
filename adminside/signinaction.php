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
		
		
		$ADMIN=$_POST['admin'];
		$PASSWORD=$_POST['password'];
		
		$sql = "SELECT * FROM admin_login where name='$ADMIN' && password='$PASSWORD'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0)
		{
		    echo "You are sucessfully logged in";
		    session_start();
        /* $_SESSION["is_logged_in"]=true;
         $_SESSION["ID"]=$ret["id"];
         $_SESSION["NAME"]=$ret["name"];*/
         header('location:adminpanel.php');

		} else {
		    /*echo "Error: " . $sql . "<br>" . $conn->error;*/
		    echo "Invalid entry";
		}

		
		$conn->close();


?>