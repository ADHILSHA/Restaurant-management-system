<?php
session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //echo "Welcome " . $_SESSION['USERNAME'] . "!";
    $userid = $_SESSION['ID'];
} else {
    echo "Please log in first to see this page.";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order food</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
    
.carousel-inner{
    height: 480px;
}

/*.item, img{
    min-height:480px;
    width:  100% !important;
}*/
#searchbar{
  position: absolute;
  right:40%;
}
#myaccount{
  position: absolute;
  right:17%;
}
#myimage{
  position: relative;
    /*float: left;*/
    width:  200px;
    height: 200px;
    left:5%;
    /*background-position: 50% 50%;*/
    background-repeat:   no-repeat;
    
}
#renderimage{
  position: absolute;
 width:  200px;
    height: 200px;
    top:10%;
}
table{
      position: absolute;
      top:100%;
}
#qty{
  width:35%;
}
#newrow
{
   position: relative;
    top:10%;
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
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Vegetarian</a>
    <a class="dropdown-item" href="#">Non-Vegetarian</a>
    <a class="dropdown-item" href="#">Snacks</a>
  </div>
  <a class="navbar-brand" href="#">Canteen Management System</a>
  
</div>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" id="searchbar">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="btn-group" id="myaccount">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    My Account
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="vieworder.php">Orders</a>
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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="foodimg4.jpg" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="foodimg2.jpg" alt="Second slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="foodimg3.jpg" alt="Third slide" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<br>
<h3>Todays Special</h3>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div id="product-grid">
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen";
$conn = new mysqli($servername, $username, $password, $dbname);// Create connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM food";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){      
      echo "<table><tr>";
      $count=0;
 while($row=mysqli_fetch_array($result)){
  $pid = $row['ID'];
   echo "<div id='renderimage'>";
  echo '<td><img id="myimage" src="data:image/jpeg;base64,'.base64_encode( $row['IMAGE'] ).'"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>';
  echo "<h3>" .$row['NAME'] . "</h3>";
  echo "<h3>Price : ₹" .$row['PRICE'] . "</h3>";
  echo "<form action='addtocart.php' method='POST'><input type='text' class='form-control' placeholder='Quantity' name='quantity' id='qty'/>&nbsp&nbsp<br>";
  echo "<input type='hidden' name='pid' value ='" .$row['ID']. "'/>";
  echo "<button class='btn btn-primary'>Add to Cart</button></td><br><br><br>";
  echo "</form>";
  echo "</div>";
  $count=$count+1;
  if($count>4)
  {  echo "</tr><br><br><br><tr id='newrow'>";
    $count=0;
  }}
 echo "</div>";
}}
echo "</tr></table>";
 } 
 else {
    echo "Please log in first to see this page.";
}  
?>

 
</div>
</body>
</html>