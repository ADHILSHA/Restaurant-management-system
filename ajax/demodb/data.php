<html>
<head>
<?php
$q = $_GET['q'];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "canteen";
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql1 = "SELECT * FROM demouser where uname = '$q'";
		$result = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result) > 0)
		{
			  	echo "User " .$q. " exists";

	    }
		$conn->close();


?>

</head>
<body>
</body>
</html>
