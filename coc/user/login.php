<?php 
session_start();
include ("../includes/database.php");
include ("../functions/functions.php");

 ?>
<html>
     <head>
	     <title>Login - JAUL</title>
		 
		 <!----------META---------->
		 <meta http-equiv="Content-Type" content="text/html; charset-utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		 <link rel="stylesheet" href="../main.css" type="text/css">	 
		 <link rel="stylesheet" href="../style.css" type="text/css">	 
		 <link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>	
	 </head>

	 <body class="sessions sessions-new">
	   <div class="page">
	     <div class="content_wrapper">

	       <form action="" class="form-vertical signIn account_form" id="new_user" method="post">
	   			<h1>Sign In</h1>

	 		<div class="card_container">
	 			<div class="account_info">
	 				<h3 style="margin:0 0 20px 0;" >Enter Your Login Credentials</h3>

	       		<div class="profile_photo">
	         		<img src="../img/profile-placeholder.jpg" height="100%" width="100%" />
	       		</div>

	 		  	<div class="form_fields">
	 			  <div class="form-group">
	 			  	<div class="controls">
	 			  		<input class="form-control" name="email" size="30" type="email" placeholder="Enter Email" required autofocus />
	 			  	</div>
	 			  </div>

	 			  <div class="form-group">
	 				<div class="controls">
	 					<input class="form-control" name="pass" size="30" type="password" placeholder="Enter Password" required />
	 				</div>
	 			  </div>
				</div>
	 			</div>
	 		</div>

	 	<input class="btn btn-green" name="login" type="submit" value="Login" />
	   
	   	<div class="switch-links">	   	
	   		<a href="register.php">Sign up</a>
			<a href="forgot_pass.php">Forgot your password?</a>
		</div>
	 </form>
	</div>
	   </div>
	 </body>			
</html>

 <?php 

 	if(isset($_POST['login'])){

 		$email = $_POST['email'];
 		$pass = $_POST['pass'];

 		$select = "SELECT email, pass FROM users";

 		$run = mysqli_query ($connect, $select);

 			while ($row = mysqli_fetch_array($run, MYSQLI_ASSOC)) { 
 				
 				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 					echo "<script>alert ('Invalid email'); </script>";

 					exit();
 				}
 					elseif ($row['email']  == $email){

 						if (password_verify($pass, $row['pass'])){
 								
 								$_SESSION['email'] = $email;

 								echo "<script>alert ('Your login success'); </script>";
								echo "<script>window.open('../index.php','_self');</script>";

 								exit();
 							
 						}
 						else{
 							echo "<script>alert ('Password is not Correct'); </script>";
 							exit;
 					    }
 						
 			        }
 			}
 				 	
 			echo "<script>alert ('You are not Registered'); </script>";	
 			echo "<script>window.open('../index.php','_self');</script>";		
 				

	}

  ?>