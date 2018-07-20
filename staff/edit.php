
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
$f_id = $_POST["productid"];
$f_name = $_POST["productname"];
$f_price = $_POST["productprice"];
$f_qa = $_POST["productquantity"];
$sql = "UPDATE food SET Q_AVAILABLE='$f_qa',NAME='$f_name',PRICE='$f_price' WHERE ID='$f_id'";
if ($conn->query($sql) === TRUE) {
        echo '("updated successfully")';
        header('Location:view.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
