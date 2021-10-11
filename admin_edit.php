<?php
$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
session_start();
$x=$_GET["eid"];
$que="SELECT * FROM register_task_table WHERE id='$x'";
$result=mysqli_query($con,$que);
 $obj=mysqli_fetch_assoc($result);


?>
<?php 
include("header2.php");
?>


<div class="container" id="content">
	<form action="update_admin.php" method="post">
	<h5 class="text-center">Edit Your Profile</h5>
	<input type="hidden" name="eid" value="<?php echo $obj["id"];?>">

<table class="table table-striped text-center my-3">
	<tr><th>Fullname</th><td><input type="text" name="fname" value="<?php echo $obj['fullname'];?>"></td></tr>
	<tr><th>Email</th><td><input type="text" name="email" value="<?php echo $obj['email'];?>"></td></tr>
	<tr><th>Contact</th><td><input type="text" name="contact" value="<?php echo $obj['contact'];?>"></td></tr>

	

</table>
<div class="buttons text-center">
<input type="submit" value="UPDATE" class="btn btn-info my-5 mx-1">
<!-- ?eid= echo $obj["id"]; -->
</div>
</form>
</div>



<?php 
include("footer.php");
?> 






