<?php
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'canteen';
        $f_name = $_POST["name"];
        $f_price = $_POST["price"];
        $f_qa = $_POST["quantity"];
        $f_cat = $_POST["cat"];
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into food (NAME, CATEGORY, PRICE, Q_AVAILABLE, IMAGE, DATE) VALUES ('$f_name', '$f_cat', '$f_price','$f_qa','$imgContent', '$dataTime')");
        if($insert){
            header('Location:add.php');
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }
?>