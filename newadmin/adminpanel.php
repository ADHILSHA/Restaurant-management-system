<!DOCTYPE html>
<html>
<head>
	<title>Canteen Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script>
		
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
        <li><a href="add.php" style="text-decoration:none; color:inherit;">Add Staff</a></li>
        <li><a href="view.php" style="text-decoration:none; color:inherit;">Manage Staff</a></li>
        <li><a href="view.php" style="text-decoration:none; color:inherit;">Manage users</a></li>
        <li class="active"><a href="index.php" style="text-decoration:none; color:inherit;">Home</a></li>
      </ul>
    </div>
  </nav>
 <div class="container">
 	<br><br>
  	   <a href="add.php"><button type="button" class="btn btn-outline-primary btn-lg" >Add Staff</button><br><br></a>
  	 <button type="button" class="btn btn-outline-primary btn-lg" >Manage Staff</button><br><br>
  	 <button type="button" class="btn btn-outline-primary btn-lg">Manage Users</button><br><br>
  	
  	
  </div>

</body>
</html>