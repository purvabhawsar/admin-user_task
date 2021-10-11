<?php

$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
session_start();
$a=$_SESSION['id'];
$que="DELETE FROM register_task_table WHERE id='$a'";
$result=mysqli_query($con,$que);
header('location:login.php');
?>