<!DOCTYPE html>
<?php
	session_start();
	include ("functions/functions.php");

?>
<html>
     <head>
	     <title>HOME - JAUL</title>
		 
		 <!----------META---------->
		 <meta http-equiv="Content-Type" content="text/html; charset-utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		 <link rel="stylesheet" href="main.css" type="text/css">
		 <link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">	 
	 </head>

     <body style="background-color:#6b8793;">
     	<header>
         	<div class="cover"> 
         		<h2 class="title">JAUL</h2>
         		<h3 class="full">(Jamaican Academy for Unique Learning)</h3>
         		<nav>
         			<ul>
         				<li>
         					<a href="index.php" class="active">HOME</a>
         					<a href="#about" class="more" data-toggle="modal">ABOUT</a>
         					<a href="faqs.html">FAQs</a>
         					<a href="#contact">CONTACT</a>
         				</li>
         			</ul>
         		</nav>
         	</div>
         </header>

         <div id="account">
             <?php
              if (isset ($_SESSION['email'])){
              	echo "<strong style='color:whitesmoke;'>Welcome: </strong>" . $_SESSION['email'];              					 						
				$user = $_SESSION ['email'];

         		$get_info = "SELECT * FROM users WHERE email = '$user'";

         		$run_info = mysqli_query($connect, $get_info);

         		$row_info = mysqli_fetch_array($run_info);

         		$photo = $row_info['photo'];

         		$photo = $row_info['photo'];

         		$points = $row_info['points'];

         		if (!empty($row_info['photo'])){

          		echo "<div class='profile-page'><a href='user/account.php'><img src = 'user/user_photo/$photo' widt20px' height='20px' /><strong>Account</strong></a></div>";
         		}
         		else{
          		echo "<div class='profile-page'><a href='user/account.php'><img src = 'img/profile-placeholder.jpg' wi='20px' height='20px' /><strong>Account</strong></a></div>";
         		}					
         	 }
             else{
               echo "<strong style='color:whitesmoke;'>Welcome Guest</strong>";					
             }	
            ?>
              		
             <?php 
              if(!isset ($_SESSION['email'])){
         		echo "<li style='padding:0px 5px;'><a href='user/login.php' style='padding:3px;'>Login/ Sign Up</a></li>";
              }
              else{
         		echo "<li style='padding:0px 5px;'><a href='user/logout.php' style='padding:3px;'>Logout</a></li>";

         		if (empty($row_info['points'])){
              	echo "<strong style='color:whitesmoke;'> Points: </strong>0";
              	}			
              	else{
              	echo "<strong style='color:whitesmoke;'> Points: </strong>" . $points;
              	}
         	  }

            ?>
		</div>

         <div class="about">             
             <div id="about" class="modal fade">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                             <h4 class="modal-title">About Us</h4>
                         </div>
                         <div id="moreInfo" width="560" height="315" class="modal-body">
                            <p class="description">This is a learning website made to aid the development of unique learners, specifically visual learners ranging from grades 7-9.</p>
                            <p class="description">It was created  by aspiring coders in hopes of winning a challenge, given at a code marathon, hosted by Coders of the Caribbean. We believe persons learn differently and a popular method of learning is visual learning.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>     

	     <div class="container">
		    <div class="wrapper">
		      <h3>Subjects Offered</h3>
		     	<div class="row">
		     	  <a href="math/index.php"><div class="subject">
		     		<div class="top">
		     			<img src="img/math.jpg" alt="math" height="100%" width="100%">
		     		</div>
		     		<div class="bottom">
		     			<h3>Math</h3>
		     		</div>
		     		</div></a>
		     	  <a href="english/index.php"><div class="subject">
		     		<div class="top">
		     			<img src="img/english.jpeg" alt="english" height="100%" width="100%">
		     		</div>
		     		<div class="bottom">
		     			<h3>English</h3>
		     		</div>
		     		</div></a>
		     	  <a href="science/index.php"><div class="subject">
		     		<div class="top">
		     			<img src="img/science.jpg" alt="science" height="100%" width="100%">
		     		</div>
		     		<div class="bottom">
		     			<h3>Science</h3>
		     		</div>
		     		</div></a>
		     	</div>
		     </div>
		 </div>

		<section id="contact">		 
				 <div>
				     <div class="item-title">
					 <h2>CONTACT</h2>
			         </div>
					 <div id="contact-form">
						 <form action="" method="post">
							 <input type="text" name="Firstname" placeholder="Firstname" maxlength="15" required />
							 <input type="text" name="Lastname" placeholder="Lastname" maxlength="15" required />
							 <input type="email" name="E-mail_Address" placeholder="E-mail Address" required />
							 <input type="text" name="Phone" placeholder="Phone" maxlength="12" required />
							 <input type="text" name="Address_Line_1" placeholder="Address Line 1" maxlength="30" required />
							 <input type="text" name="Address_Line_2" placeholder="Address Line 2" maxlength="30"/>
							 <select name="Parishs">
							    <option value="Parish">Parish</option>
							    <option value="Clarendon">Clarendon</option>
								<option value="Hanover">Hanover</option>
								<option value="Kingston and St. Andrew">Kingston and St. Andrew</option>
								<option value="Manchester">Manchester</option>
								<option value="Portland">Portland</option>
								<option value="St. Ann">St. Ann</option>
								<option value="St. Catherine">St. Catherine</option>
								<option value="St. Elizabeth">St. Elizabeth</option>
								<option value="St. James">St. James</option>
								<option value="St. Mary">St. Mary</option>
								<option value="St. Thomas">St. Thomas</option>
								<option value="Trelawny">Trelawny</option>
								<option value="Westmoreland">Westmoreland</option>
							 </select>
                             <select name="Country">
								<option value="Country">Country</option>
								<option value="Jamaica">Jamaica</option>
							 </select>
							 <textarea name="Message" placeholder="Message" required ></textarea><br/>
                             <input type="submit" value="SEND" />							 
						 </form>						 
					 </div>
				 </div>
			 </section>

			 <section id="social">		 
				 <div id="social-icons">
				     <a href="#" target="_blank"><img class="icons" src="img/facebook.png" width="50px" height="50px" alt="facebook" /></a>
				     <a href="#" target="_blank"><img class="icons" src="img/twitter.png" width="50px" height="50px" alt="twitter" /></a>
				     <a href="#" target="_blank"><img class="icons" src="img/linkedin.png" width="50px" height="50px" alt="linkedin" /></a>
				     <a href="#" target="_blank"><img class="icons" src="img/youtube.png" width="50px" height="50px" alt="youtube" /></a>	</div>
			 </section>

		<footer>
			
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script> 
	 </body>
</html>