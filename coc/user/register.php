<!DOCTYPE html>
<?php
  session_start();
  include ("../functions/functions.php");
  include ("../includes/database.php");

?>
<?php 
  if (isset($_POST['register'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $photo = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $country = $_POST['country'];
    $parish = $_POST['parish'];
    $contact = $_POST['contact'];

    $salt = ['cost' => 12];
    
    $secret = password_hash($pass, PASSWORD_BCRYPT,$salt);

    move_uploaded_file($photo_tmp, "user_photo/$photo");
      

    $insert ="INSERT INTO users
          (fname, lname, email, pass, country, parish, contact, photo) 
          VALUES 
          ('$fname', '$lname', '$email','$secret','$country','$parish','$contact','$photo')";


    $run = mysqli_query ($connect, $insert);

    if ($run){

      $_SESSION['email'] = $email;

      echo "<script>alert ('Your Account has been Created');</script>";
      echo "<script>window.open('../index.html','_self');</script>";
    }

  }
 ?>
<!--/*********************************************************************************/
    /*                 This code is provided by ยง Sanjay Stephens ยง                  */
    /*********************************************************************************/
-->
<html>
     <head>
       <title>Register - JAUL</title>
     
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

            <form action="register.php" method="post" enctype="multipart/form-data" class="form-vertical signIn account_form_register">
              <h1>Register</h1>

          <div class="card_container_register">
            <div class="account_info_register">
              <h3 style="margin:0 0 20px 0;" >Create Your Login Credentials</h3>

              <div class="form_fields">
              <div class="form-group">
                <div class="controls">
                  <input class="form-control" name="fname" size="30" type="text" placeholder="Enter First Name" required />
                </div>
              </div>

              <div class="form-group">
              <div class="controls">
                <input class="form-control" name="lname" size="30" type="text" placeholder="Enter Last Name" required />
              </div>
              </div>

                <div class="form-group">
                <div class="controls">
                  <input class="form-control" name="email" size="30" type="email" placeholder="Enter Email" required />
                </div>
                </div>

                  <div class="form-group">
                  <div class="controls">
                    <input class="form-control" name="pass" size="30" type="password" placeholder="Enter Password" min = "8" max = "16" required />
                  </div>
                  </div>

                      <div class="form-group">
                      <div class="controls">
                        <select class="form-control" name="country">
                          <option>Select A Country</option>
                          <option value="Jamaica">Jamaica</option>
                        </select>
                      </div>
                      </div>

                        <div class="form-group">
                        <div class="controls">
                           <select class="form-control" name="parish">
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
                        </div>
                        </div>

                          <div class="form-group">
                          <div class="controls">
                            <input class="form-control" name="contact" size="30" type="text" placeholder="Enter Contact" required />
                          </div>
                          </div>

                              <div class="form-group">
                              <div class="controls">
                                <input class="form-control" type="file" size="30" name="photo" />
                              </div>
                              </div>

                
          </div>
            </div>
          </div>

        <input class="btn btn-green" name="register" type="submit" value="Create Account" />
        
          <div class="switch-links">      
            <a href="login.php">Login</a>
        <a href="forgot_password.php">Forgot your password?</a>
      </div>
      </form>
     </div>
        </div>
      </body> 
</html>