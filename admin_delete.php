<?php 

$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");

$x=$_GET['did'];
$que="DELETE FROM register_task_table WHERE id='$x'";
$result=mysqli_query($con,$que);
header('location:admin_dash.php');



?>