<?php
session_start();
$user_id = $_SESSION['ID'];
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
$CARTPID = $_POST['pid'];
$quantity = $_POST['quantity'];
$sql = "INSERT INTO cart (UID, ITEMID, QUANTITY)
VALUES ('$user_id', '$CARTPID','$quantity')";

if ($conn->query($sql) === TRUE) {
    header('Location:user_home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>