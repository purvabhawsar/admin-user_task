<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<script type="text/javascript">
	
function validate(){

var fname=$("#fname").val();
var email=$("#email").val();
var password=$("#pass").val();
 var contact=$("#number").val();

var check=true;

		 
      var pattern=/^[a-zA-z ]*$/;
      if (pattern.test(fname) && fname!=='') 
        {
           $("#name_msg").html("");
       //check=false;
     }
     else
     {
      $("#name_msg").html("enter your name");
        check=false;

     }



     if(IsEmail(email)==false){
          
          $("#email_msg").html("enter email");
        }

        function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) 
  {
  $("#email_msg").html("Please Enter correct email");
  check=false;

  }else{
  	$("#email_msg").html("");
   
  }
}

if (password=="")
 {
 	$("#password_msg").html("Enter Your password ");
 	check=false;
 }
 else
 {
 	$("#password_msg").html("");
 }


if (contact.length==10)
        		{

              if (isNaN(contact))
               {
                     $("#contact_msg").html("enter number only");
                     check=false;
              
          
               }
               else
               {
                     $("#contact_msg").html("");
              //check=false;
          
               }
        			
        		}
            else
            {
              $("#contact_msg").html("enter 10 digit numeric number");
              check =false;
            }
        		

//alert(check);
return check;

}





</script>
<body>
	

	<div class="container" id="header">
		<div class="header m-3" >
			<a href="logout.php" type="button" class="btn btn-light m-3">LOGOUT</a>
			
		</div>

	</div>