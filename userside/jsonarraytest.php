<?php


$json = json_encode(array(
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
));
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
        $sql = "INSERT INTO test (array) VALUES ('$json')";
        if ($conn->query($sql) === TRUE) {
    echo "<p id='alertmsg'>New record created successfully</p>";
    //echo "<script>setTimeout(\"location.href = 'add.php';\",1000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo $json;
?>