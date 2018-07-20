<?php
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'canteen';
        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $user_name = $_POST["uname"];
        $pass_word = $_POST["passwd"];
        $encpass =  md5($pass_word);
        $e_mail = $_POST["email"];        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        $insert = $db->query("INSERT into staff_login (firstname, lastname, username, password, email) VALUES ('$first_name', '$last_name', '$user_name','$encpass','$e_mail')");
        if($insert){
            header('Location:add.php');
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
?>