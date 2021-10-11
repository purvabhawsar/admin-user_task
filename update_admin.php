<?php 
$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
$a=$_POST["eid"];
$b=$_POST["fname"];
$c=$_POST["email"];
$d=$_POST["contact"];
$que="UPDATE  register_task_table SET fullname='$b', email='$c', contact='$d' WHERE id='$a'";
$result=mysqli_query($con,$que);
header('location:admin_dash.php');

?>