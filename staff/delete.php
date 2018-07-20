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
/*function deletebooking($orderID){

    $sql="DELETE FROM food WHERE ID='$orderID'";
    echo $_GET['del'];
   // $result=mysqli_query($conn, $sql) or die("oopsy, error when tryin to delete events 2");

}*/
// sql to delete a record
$orderID = $_GET['del'];
$sql="DELETE FROM food WHERE ID='$orderID'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header('Location: view.php');

$conn->close();
?>
