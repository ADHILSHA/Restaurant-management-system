<!DOCTYPE html>
<html>
<head>
	<title>canteen management system</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
  	$(document).ready(function() {
    $('select').material_select();
  });
  </script>
          
	<style>
	.form-control
	{

		text-align: center;
		width:50%;
		right:30%;
		position: absolute;

	}
	#but
	{
		right:50%;
		top:125%;
		position:absolute;
	}
	#block
	{
		top:25%;
		position: absolute;
		height:50%;
		width:50%;
		left:25%;
	}
</style>
</head>
<body>
	
<nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center" style="text-decoration: none">Canteen Management System</a>
      <ul class="left hide-on-med-and-down">
        <li class="active" ><a href="add.php" style="text-decoration:none; color:inherit;">Add Items</a></li>
        <li><a href="view.php" style="text-decoration:none; color:inherit;">Manage Items</a></li>
        <li ><a href="adminpanel.php" style="text-decoration:none; color:inherit;">Home</a></li>
      </ul>
    </div>
  </nav>	
<div id="block" class="input-field col s12">	
<form action="upload.php" method="post" enctype="multipart/form-data">
	
    <select class="form-control" name="cat">
      <option>Vegetarian</option>
      <option> Non-Vegetarian</option>
    </select>
    <br><br><br>
	
 <input type="text" name="name" class="input-field col s12" id="food_name" placeholder="Item Name"><br><br>
<input type="text" name="price" class="input-field col s12" placeholder="Price"><br><br>
<!--ID : <input type="text" name="id"><br><br>-->

 <input type="text" name="quantity" class="input-field col s12" placeholder="Quantity available"><br><br>
 Select image to upload:
        <input type="file" name="image"/>
<button class="btn waves-effect waves-light" type="submit" name="action" id="but">Submit
    <i class="material-icons right">send</i>
  </button>


</form>
</div>



</body>
</html>