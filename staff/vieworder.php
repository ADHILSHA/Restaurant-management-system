<!DOCTYPE html>
<html>
<head>
  <title>Canteen Management system</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.input-field input[type="search"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("searchtest.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".input-field").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
  <style>
    .highlight{
      width:75%;
      height:55%;
      position: absolute;
      top:30%;
      left:20%;
    }
    .logo{
      width:4.5%;
      height:4.5%;
    }
    .searchbox{
      width:30%;
      height:20%;
      left:20%;
      position: absolute;
    }
    #slabel
    {
      left:-5%;
      position: absolute;
    }
    #ordertable
    {
      position:relative;
      width:50%;
      left:20%;
    }
    #userdetails
    {
      position: relative;
      left:20%;
    }
    ol
    {
      font-size: 1.3em;
    }
</style>
<script type="text/javascript">
  /*function myFunction()
  {
     
     var myVariable = <?php //echo(json_encode($demo)); ?>;
     document.getElementById(myVariable).innerHTML = "Hello World";
     console.log(myVariable);

  }*/
  function Deleteqry(id)
{ 
  if(confirm("Are you sure you want to delete this row?")==true)
           window.location="delete.php?del="+id;
    return false;
}
function Updateqry(id)
{ 
  /*if(confirm("Are you sure you want to Update this row?")==true)
           window.location="Update.php?update="+id;
    return false;*/
    window.location="Update.php?update="+id;
}
  
</script>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center" style="text-decoration: none">Canteen Management System</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="add.php" style="text-decoration:none; color:inherit;">Add Items</a></li>
        <li><a href="view.php" style="text-decoration:none; color:inherit;">Manage Items</a></li>
         <li class="active"><a href="vieworder.php" style="text-decoration:none; color:inherit;">Manage Items</a></li>
        <li><a href="index.php" style="text-decoration:none; color:inherit;">Home</a></li>
      </ul>
    </div>
  </nav>
  <div class="searchbox">
  <form action="search.php" method="POST">
        <div class="input-field">
          <input id="search" type="search" name="searchname" list="suggestions" required>
          <label class="label-icon" for="search" id="slabel"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
          <div class="result"></div>
        </div>
      </form>
  </div>  
  <br><br><br>  

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
         $sql = "SELECT * FROM orders";
         $i=1;
         echo "<ol class='collection'>";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
         
        while($row = mysqli_fetch_array($result)){
          echo "<li>";
           echo "<div id='ordercontent'>";
         echo "<table class='table-bordered' id='ordertable'>";
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
$usersid = $row['UID'];
$usersql = "SELECT * FROM userlogin WHERE ID=$usersid";
if($userresult = mysqli_query($conn, $usersql)){
       while($userrow = mysqli_fetch_array($userresult)){
         echo "<div id='userdetails' >";
         echo "<h6>Ordered by : ".$userrow['NAME']. "</h6> ";
       }
}
     echo "<h6>Total Price : " .$row['TOTAL_PRICE']. "</h6><br><br> ";  
     echo "<div/>";
     echo "</li>";     
}
echo "</div>";
echo "</ol>";
    }
}
         ?>
</body>
</html>         