
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
//echo "Connected successfully";
$f_name = $_POST["name"];
$f_price = $_POST["price"];
$f_qa = $_POST["quantity"];
$f_cat = $_POST["cat"];



$sql = "INSERT INTO food (NAME, CATEGORY, PRICE, Q_AVAILABLE)
VALUES ('$f_name', '$f_cat', '$f_price','$f_qa')";

if ($conn->query($sql) === TRUE) {
    echo "<p id='alertmsg'>New record created successfully</p>";
    header('Location:add.php');
    //echo "<script>setTimeout(\"location.href = 'add.php';\",1000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
