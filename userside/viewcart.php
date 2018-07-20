<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //echo "Welcome " . $_SESSION['USERNAME'] . "!";
    $userid = $_SESSION['ID'];
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
    width:60%;
    

}
#cartcontents
{
    position:absolute;
    top:20%;
    left:30%;
    width:50%;
}
#tablecontent
{
  width:70%;
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
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
         $sql = "SELECT * FROM cart where UID=$userid";
         $i=1;
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      echo "<div id='cartcontents'>";
         echo "<table class='table-bordered' id='tablecontent'>";
        echo "<thead ";
            echo "<tr>";
                echo "<th >ITEM</th>";
                
                echo "<th>PRICE</th>";
                echo "<th>QUANTITY</th>";
            echo "</tr>";
        echo "<thead/>";    
        while($row = mysqli_fetch_array($result)){
            $productid = $row['ITEMID']; 
            $itemsql = "SELECT * FROM food where ID='$productid'";
            if($itemresult = mysqli_query($conn, $itemsql)){
    if(mysqli_num_rows($itemresult) > 0){
        while($itemrow = mysqli_fetch_array($itemresult)){
            echo "<tr>";
            echo "<td >" . $itemrow['NAME'] . "</td>";
                
                echo "<td> ₹ " . $itemrow['PRICE'] . "</td>";
                echo "<td>" . $row['QUANTITY'] . "</td>";
        }
    }
}
}
echo "</table><br>";
echo '<a href="orders.php"><button type="button" class="btn btn-primary btn-block" id="but">check out</button></a>';
echo "</div>";
        
        
        
        
    }
}
         ?>