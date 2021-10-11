<?php
$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
session_start();
$a=$_SESSION['id'];

$que="SELECT * FROM register_task_table WHERE id='$a'";
$result=mysqli_query($con,$que);
$obj=mysqli_fetch_assoc($result);


?>




<?php 
include("header2.php");
?>


<div class="container" id="content">

	<h5 class="text-center">Your Profile</h5>

<table class="table table-striped text-center my-3">
	<tr><th>Fullname</th><td><?php echo $obj['fullname'];?></td></tr>
	<tr><th>Email</th><td><?php echo $obj['email'];?></td></tr>
	<tr><th>Contact</th><td><?php echo $obj['contact'];?></td></tr>

	

</table>
<div class="buttons text-center">
<a href="edit.php" type="button" class="btn btn-info my-5 mx-1">EDIT</a>
<a href="delete.php" type="button" class="btn btn-danger my-5 mx-1">DELETE ACCOUNT</a>
<!-- ?eid= echo $obj["id"]; -->
</div>
</div>



<?php 
include("footer.php");
?> 