<!DOCTYPE html>
<html>
<head>
	<title>Canteen Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script>
		
		function Deletequery()
{ 
  if(confirm("Are you sure you want to delete all the items?")==true)
           window.location="clear.php";
    return false;
}
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
		.container
		{
			position: absolute;
			width:15%;
			top:30%;
			left:40%;
			height:50%;
			opacity:1.0;
		}

		
	</style>
</head>
<body>
<!--<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="spydlogo2.png" width="30" height="30" class="d-inline-block align-top" id="logo" alt="">
    Canteen Management System 
  </a>

</nav>-->
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center" style="text-decoration: none">Canteen Management System</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="add.php" style="text-decoration:none; color:inherit;">Add Items</a></li>
        <li><a href="view.php" style="text-decoration:none; color:inherit;">Manage Items</a></li>
        <li><a href="vieworder.php" style="text-decoration:none; color:inherit;">Manage Orders</a></li>
        <li class="active"><a href="index.php" style="text-decoration:none; color:inherit;">Home</a></li>
      </ul>
    </div>
  </nav>
 <div class="container">
 	<br><br>
  	 <a href="add.php"><button type="button" class="btn btn-outline-primary btn-lg">Add Items</button></a><br><br>
  	  <a href="view.php"><button type="button" class="btn btn-outline-primary btn-lg">Manage Items</button></a><br><br>
  	  <button type="button" class="btn btn-outline-primary btn-lg" onclick="Deletequery()">Clear Items</button><br><br>
  	 <a href="vieworder.php"><button type="button" class="btn btn-outline-primary btn-lg">View Orders</button></a><br><br>
  	 <button type="button" class="btn btn-outline-primary btn-lg">Manage Orders</button><br><br>
  	   <a href="view.php"><button type="button" class="btn btn-outline-primary btn-lg">Manage Events</button></a><br><br>


  	
  </div>

</body>
</html>