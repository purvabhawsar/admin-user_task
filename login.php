<?php 
$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
session_start();


?>


<?php include("header.php");?>
		<form method="post" action="log.php">


<div class="container p-5 my-5" id="content">
		<h5 class="text-center text-success">LOGIN</h5>
			

			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="email" class="form-control" id="email"

				value="<?php if(isset($_COOKIE['email']))
				        {
				        	echo $_COOKIE['email'];
				        }

			?>">
				<span id="email_msg" class="text-danger">
				<?php
				if (isset($_SESSION["email_msg"])) 
				{
					echo $_SESSION["email_msg"];
					unset($_SESSION["email_msg"]);
				}


				?>
			</span>
				
			</div>

			
				<div class="form-group">
				<label>PASSWORD</label>
				<input type="password" class=" form-control"name="password" id="pass"
				value="<?php if(isset($_COOKIE['password']))
				        {
				        	echo $_COOKIE['password'];
				        }

			?>">
				<p id="password_msg" class="text-danger">

				<?php 
                     if (isset($_SESSION["password_msg"]))
                      {
                     	echo $_SESSION["password_msg"];
                     	unset($_SESSION["password_msg"]);
                     }
				?>
				</p>
			</div>
			<input type="checkbox" name="remember" class="p-3"> Remember Me

			<div class="form-group">
				<input type="submit" name="submit" id="submit" class=" btn btn-info my-3" role="button" value="submit"  >
			</div>
	</div>
	<?php include("footer.php");?>
</form>
</body>
</html>
