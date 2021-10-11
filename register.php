<?php include("header.php");?>
		<form method="post" action="regis.php" onsubmit="return validate()">

	<div class="container p-5 my-5">
		<h5 class="text-center text-success">Registration Form</h5>
			<div class="form-group">
				<label>FULLNAME</label>
				<input type="text" name="fname" class="form-control" id="fname">
				<span id="name_msg" class="text-danger"></span>
				
			</div>

			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="email" class="form-control" id="email">
				<span id="email_msg" class="text-danger"></span>
				
			</div>

			
				<div class="form-group">
				<label>PASSWORD</label>
				<input type="password" class=" form-control"name="pass" id="pass">
				<p id="password_msg" class="text-danger"></p>
				
			</div>
			<div class="form-group">
				<label>PHONE NO.</label>
				<input type="text" name="number" class="form-control" id="number" pattern="[789][0-9]{9}">
				<span id="contact_msg" class="text-danger"></span>
				
			</div>

			
			<div class="form-group">
				<input type="submit" name="submit" id="submit" class=" my-3 btn btn-primary" role="button" value="submit">
			</div>
	</div>
	<?php include("footer.php");?>
</form>
</body>
</html>