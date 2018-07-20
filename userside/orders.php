<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //echo "Welcome " . $_SESSION['USERNAME'] . "!";
    $userid = $_SESSION['ID'];
    echo "user id is" .$userid. "";
} else {
    echo "Please log in first to see this page.";
} 


/*$json = json_encode(array(
     "client" => array(
        "build" => "1.0",
        "name" => "xxxxxx",
        "version" => "1.0"
     ),
     "protocolVersion" => 4,
     "data" => array(
        "distributorId" => "xxxx",
        "distributorPin" => "xxxx",
        "locale" => "en-US"
     )
));*/
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
         $sql = "SELECT * FROM cart where UID=$userid";
         $i=1;
         $sum = 0;
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
           // echo $row['ITEMID'];
            $json[$i] = array("ID" => $row['ITEMID'], "Quantity" => $row['QUANTITY'] );

            $i = $i + 1;
            $productid = $row['ITEMID']; 
            $itemsql = "SELECT * FROM food where ID='$productid'";
            if($itemresult = mysqli_query($conn, $itemsql)){
    if(mysqli_num_rows($itemresult) > 0){
        while($itemrow = mysqli_fetch_array($itemresult)){
            $qty = $row['QUANTITY'];
            $sum = $sum + ($itemrow['PRICE'] * $qty);
            //echo "sum is" .$sum. "";
        }
    }
}
        
        
        
        
    }
    $newjson = json_encode($json);
    $newsql = "INSERT INTO orders (UID,ITEMS,TOTAL_PRICE) VALUES ('$userid','$newjson','$sum')";
        if ($conn->query($newsql) === TRUE) {
            header('Location:user_home.php');
    echo "<p id='alertmsg'>New record created successfully</p>";
    //echo "<script>setTimeout(\"location.href = 'add.php';\",1000);</script>";
} else {
    echo "Error: " . $newsql . "<br>" . $conn->error;
}
}
}       
 $sqldel = "DELETE FROM cart WHERE UID='$userid'";

if ($conn->query($sqldel) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
} /*$newsql = "INSERT INTO test (array) VALUES ('$json')";
        if ($conn->query($sql) === TRUE) {
    echo "<p id='alertmsg'>New record created successfully</p>";
    //echo "<script>setTimeout(\"location.href = 'add.php';\",1000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/


?>