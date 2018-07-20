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
		
		
		$USERNAME=$_POST['username'];
		$PASSWORD=$_POST['password'];
		/*$sql = "SELECT * FROM staff_registration_table where username='$USERNAME' && password='$PASSWORD'";
		$result = mysqli_query($conn, $sql);*/
		$sql1 = "SELECT * FROM userlogin where USERNAME='$USERNAME' && PASSWORD='$PASSWORD'";
		$result = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result) > 0)
		{
			  	echo "You are sucessfully logged in";
			  	header('location:user_home.php');
			  	$row = $result->fetch_assoc();

	    }
		/*else if (mysqli_num_rows($result1) > 0)
			{
				echo "You are sucessfully logged in";
				header('location:user_home.php');
				$row = $result1->fetch_assoc();
				
		} */
		else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			    echo "Invalid entry";
			    exit(0);
			}
        //echo $row['ID'];
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION["ID"]=$row['ID'];
		$_SESSION["USERNAME"]=$row['USERNAME'];
		
		$conn->close();


?>