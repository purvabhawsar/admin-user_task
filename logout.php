<?php
$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
session_start();
session_destroy();
header('location:login.php');
?>