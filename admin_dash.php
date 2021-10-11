<?php 

$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
// session_start();
//print_r($_SESSION);
$que="SELECT * FROM register_task_table";
$result=mysqli_query($con,$que);
//$obj=mysqli_fetch_array($result);


?>


<?php 
include("header2.php");
?>

<div class="container">
	
<table class="table table-striped">
	<tr><th>ID</th>
		<th>Full Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>


       

        <?php 

           while($obj=mysqli_fetch_array($result))

           {
           	    ?>
         <tr>
      		<td><?php echo $obj['id'];?></td>
		    <td><?php echo $obj['fullname'];?></td>
		     <td><?php echo $obj['email'];?></td>
		      <td><?php echo $obj['contact'];?></td>
		      <td><a href="admin_edit.php?eid=<?php echo $obj['id'];?>" class="btn btn-info">Edit</a></td>
		      <td><a href="admin_delete.php?did=<?php echo $obj['id'];?>" class="btn btn-danger">Delete</a></td>
		  </tr>

           <?php

           }

         ?>
     
      	
      	
      

		

		
</table>

</div>





<?php 

include("footer.php");

?>