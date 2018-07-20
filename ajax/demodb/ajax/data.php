
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','root','StudentDB');

if($con)
//echo "<h1>connected:" . $q . "</h1>";
//else
//echo "<h1>Not connected</h1>";
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"StudentDB");
$sql="SELECT * FROM users WHERE uname = '".$q."'";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result)) {
	echo "Username " . $q . " Already Exists..";

}

/*echo "<table>
<tr>
<th>uid</th>
<th>uname</th>
<th>password</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['uid'] . "</td>";
    echo "<td>" . $row['uname'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "</tr>";
}
echo "</table>";*/
mysqli_close($con);
?>
</body>
</html> 
