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
echo "Connected successfully";
$sql = "DELETE FROM food"; 
if ($conn->query($sql) === TRUE) {
    echo "All Records deleted successfully";
     echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>
