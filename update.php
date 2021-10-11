<?php  
$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
session_start();

//print_r($_POST);

$a=$_SESSION['id']; 
$b=$_POST['fname'];
$c=$_POST['email'];
$d=$_POST['contact'];
$que="UPDATE register_task_table SET fullname='$b', email='$c', contact='$d' WHERE id='$a'";
//echo $que;
mysqli_query($con,$que);
header('location:dashboard.php');





?>