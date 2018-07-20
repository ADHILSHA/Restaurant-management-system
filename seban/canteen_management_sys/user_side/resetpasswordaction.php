<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen_management_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$EMAIL=$_SESSION["EMAIL"];
echo "email is ".$EMAIL;
$PASSWORD=$_POST['password'];
$CONFIRM=$_POST['confirm'];
if($PASSWORD!=$CONFIRM)
{
	echo "password confirmation failed";
	exit(0);
}
$sql = "UPDATE staff_registration_table set password=$PASSWORD where email='$EMAIL'";

if (mysqli_query($conn, $sql)) {
    echo "Password reset successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
