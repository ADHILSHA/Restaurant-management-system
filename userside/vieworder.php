<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //echo "Welcome " . $_SESSION['USERNAME'] . "!";
    $userid = $_SESSION['ID'];
    $usrname = $_SESSION['USERNAME'];
} else {
    echo "Please log in first to see this page.";
} ?>
<!DOCTYPE html>
<html>
<head>
  <title>Order food</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
    
.carousel-inner{
    height: 480px;
}

.item, img{
    min-height:480px;
    width:  100% !important;
}
#searchbar{
  position: absolute;
  right:40%;
}
#myaccount{
  position: absolute;
  right:15%;
}
#but
{
    width:10%;

}
#ordercontent
{
  position: absolute;
  left:20%;
  top:15%;
  width:50%;
}
#urorders
{
  text-align: center;
  position: relative;
  left:190%;
  color:#0ef7e4;
}
.table-bordered{
  width:100%;
  }
  </style>
</head>
<body>
  <script type="text/javascript">
    function Updateqry(id)
{ 
    window.location="addtocart.php?cartpid="+id;
    
}
  </script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
  <a class="navbar-brand" href="user_home.php">Canteen Management System</a>
  <div><h4 id="urorders">Your Orders</h4></div>
</div>
      
    </ul>
    <div class="btn-group" id="myaccount">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    My Account
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Orders</a>
    <a class="dropdown-item" href="#">History</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php">Log out</a>
  </div>
</div>
<a href="viewcart.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span>Cart
        </a>

  </div>
</nav>



<br>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div id="product-grid">
<?php
$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "canteen";        
        $userid = $_SESSION["ID"];
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
         $sql = "SELECT * FROM orders WHERE UID='$userid'";
         $i=1;
         echo "<ol class='list-group'>";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
         echo "<div id='ordercontent'>";           
        while($row = mysqli_fetch_array($result)){
          echo "<table class='table-bordered'>";
        echo "<thead ";
            echo "<tr>";
                echo "<th >ITEM</th>";                
                echo "<th>PRICE</th>";
                echo "<th>QUANTITY</th>";
            echo "</tr>";
        echo "<thead/>";   
            $jsonarray = $row['ITEMS'];
            $my_array = json_decode($jsonarray, TRUE);
             $length = sizeof($my_array);
              echo "<h5>Date & time: " .$row['DATE']. "<h5>";
              echo "<h4>Order ID :" .$row['ORDERID']. "</h4>";
              echo "<h6>Order Status : Successful</h6>";
            for ($x = 1; $x <= $length; $x++) {
    $productid = $my_array[$x]['ID'];
     $itemsql = "SELECT * FROM food where ID='$productid'";
            if($itemresult = mysqli_query($conn, $itemsql)){
    if(mysqli_num_rows($itemresult) > 0){
        while($itemrow = mysqli_fetch_array($itemresult)){
            echo "<tr>";
            echo "<td >" . $itemrow['NAME'] . "</td>";
                
                echo "<td> ₹ " . $itemrow['PRICE'] . "</td>";
                echo "<td>" . $my_array[$x]['Quantity'] . "</td>";
        }
    }
   }  
}    
echo "</table><br>";
     echo "<h4>Total Price : " .$row['TOTAL_PRICE']. "</h4> ";
     echo "<button class='btn-primary'>Cancel order</button><br><br>";       
}
echo "</div>";  
    }
}
         ?>