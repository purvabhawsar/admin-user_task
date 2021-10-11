<?php 

$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");
session_start();

$e=$_POST['email'];
$p=$_POST['password'];
$pass=md5($p);



$que="SELECT * FROM register_task_table WHERE email='$e'";
$query=mysqli_query($con,$que);
if ( false===$result ) {
 printf("error: %s\n", mysqli_error($con));
}
else {
 echo 'done.';
}


if (mysqli_num_rows($query)==1)
 {
	$obj=mysqli_fetch_array($query);
	
    $pas=$obj['password'];

	if ($pas==$pass)
	 {
		$_SESSION['name']=$obj["fullname"];
		$_SESSION['id']=$obj["id"];
		$_SESSION['user_logged_in']=true;
		if(isset($_POST["remember"])) {
	setcookie ("email",$e,time()+ 3600);
	setcookie ("password",$p,time()+ 3600);
	echo "Cookies Set Successfuly";
	header('location:dashboard.php');
} else {
	setcookie("email","");
	setcookie("password","");
	echo "Cookies Not Set";
	header('location:dashboard.php');
}
		

		if ($obj['usertype']==1) 
		{
			header('location:admin_dash.php');
			echo "hello";
		}
		else
		{
			header('location:dashboard.php');
		}


		
	}
	else
	{
		$_SESSION['password_msg']="enter correct  password";
		header('location:login.php');
	}
}
else
{
	$_SESSION['email_msg']="enter correct username and password";
	header('location:login.php');
}

// if(isset($_POST["remember"])) {
// 	setcookie ("email",$e,time()+ 3600);
// 	setcookie ("password",$pass,time()+ 3600);
// 	echo "Cookies Set Successfuly";
// 	header('location:dashboard.php');
// } else {
// 	setcookie("email","");
// 	setcookie("password","");
// 	echo "Cookies Not Set";
// 	header('location:dashboard.php');
// }




?>

