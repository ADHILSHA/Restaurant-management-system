<!DOCTYPE html>
<html>
<head>
	<title>Canteen Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
	<style>
	body{
		background-image:url("bg3.jpg");
		background-repeat: no-repeat;
		background-size:100% 100%;
	}
		.navbar
		{
			background-color:red;
		}
		.fcontainer
		{
			position: absolute;
			width:55%;
			top:20%;
			left:30%;
			/*height:50%;*/
			opacity:1.0;
		}
		#btn
		{
			position: absolute;
			left:40%;
		}
		
	</style>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center" style="text-decoration: none">Canteen Management System</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="add.php" style="text-decoration:none; color:inherit;">Add Items</a></li>
        <li class="active" ><a href="view.php" style="text-decoration:none; color:inherit;">Manage Items</a></li>
        <li ><a href="adminpanel.php" style="text-decoration:none; color:inherit;">Home</a></li>
      </ul>
    </div>
  </nav>
</body>
</html>
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
/*function deletebooking($orderID){

    $sql="DELETE FROM food WHERE ID='$orderID'";
    echo $_GET['del'];
   // $result=mysqli_query($conn, $sql) or die("oopsy, error when tryin to delete events 2");

}*/
// sql to delete a record
$orderID = $_GET['update'];
$sql = "SELECT * FROM food where ID='$orderID'";
if($result = mysqli_query($conn, $sql)){
	while($row = mysqli_fetch_array($result)){ 
				$pname = $row['NAME'];    
				$pprice = $row['PRICE'];
				$pquantity = $row['Q_AVAILABLE']; 
				$pid = $row['ID'];
				$pic = $row['IMAGE'];
				echo "<div class='fcontainer'>";
				echo "<form action='edit.php' method='POST' enctype='multipart/form-data'>";   
				echo "<h6>Item ID : </h6><input type='text' name='productid' value='$pid' class='form-control' readonly><br>";     
                echo "<h6>FOOD NAME : </h6><input type='text' name='productname' value='$pname' class='form-control'><br>";
                echo "<h6>PRICE : </h6><input type='text' name='productprice' value='$pprice' class='form-control'><br>";
                echo "<h6>QUANTITY AVAILABLE : </h6><input type='text' name='productquantity' value='$pquantity' class='form-control'><br>";
                echo "Select image to upload:
              <input type='file' name='image' /><br><br>";
                echo "<input type='submit' class='waves-effect waves-light btn' value='submit' id='btn' >";
                echo "</form>";
                echo "</div>";

                
                


         }
  // $sql = "UPDATE foods SET Q_AVAILABLE='$p_quantity' WHERE id='$orderID'";      
}

?>