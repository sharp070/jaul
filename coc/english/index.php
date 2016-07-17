<!DOCTYPE html>
<?php
  session_start();
  include ("../functions/functions.php");

?>
<html>
     <head>
	     <title>English - Videos</title>
		 
		 <!----------META---------->
		      <meta http-equiv="Content-Type" content="text/html; charset-utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
          <link rel="stylesheet" href="../main.css" type="text/css">
          <link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
       </head>

          <body>
            <header class="subject-page english">
                <h1>ENGLISH LANGUAGE</h1>
               <nav>
                 <ul>
                     <li><a href="../index.php">HOME</a></li>
                     <li><a href="#myModal" class="more" data-toggle="modal">ABOUT</a></li>
                     <li><a href="../faqs.html">FAQs</a></li>
                     <li><a href="">CONTACT</a></li>
                   </ul>  
               </nav>
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

                           echo "<div class='profile-page'><a href='user/account.php'><img src = '../user/user_photo/$photo' width='20px' height='20px' /><strong>Account</strong></a></div>";
                         }
                         else{
                           echo "<div class='profile-page'><a href='user/account.php'><img src = '../img/profile-placeholder.jpg' width='20px' height='20px' /><strong>Account</strong></a></div>";
                         }         
                       }
                           else{
                             echo "<strong style='color:whitesmoke;'>Welcome Guest</strong>";         
                           } 
                         ?>
                         
                         <?php 
                           if(!isset ($_SESSION['email'])){
                         echo "<li style='padding:0px 5px;'><a href='../user/login.php' style='padding:3px;'>Login/ Sign Up</a></li>";
                           }
                           else{
                         echo "<li style='padding:0px 5px;'><a href='../user/logout.php' style='padding:3px;'>Logout</a></li>";

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

             <div class="topics">
              <nav>
               <ul>
                 <li><a href="index.php" class="active">Grammar</a></li>
                 <li><a href="#">Summary Writing </a></li>
                 <li><a href="#">Narrative Writing </a></li>
                 <li><a href="#">Descriptive Writing </a></li>
               </ul>
               </nav>
             </div>

            <section class="vid-row">
              <div class="item-box reveals">         
                <div class="reveal-wrapper">
                  <a href="#" data-target="#subTopic1" data-toggle="modal"><div class="reveal-content">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/0emlVxINBUk?controls=0"></iframe>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div></a>
                  <div class="reveal-top">
                        <h1>Subject Verb Agreement</h1>
                  </div>

                  <div id="subTopic1" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <h4 class="modal-title">Subject Verb Agreement</h4>
                        </div>
                        <div class="modal-body">
                          <iframe width="530" height="320" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/0emlVxINBUk"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reveal-wrapper">
                  <a href="#" data-target="#subTopic2" data-toggle="modal"><div class="reveal-content">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RPqxNqO8u-A?controls=0"></iframe>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div></a>
                  <div class="reveal-top">
                        <h1>Prefix and Suffix</h1>
                  </div>

                  <div id="subTopic2" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <h4 class="modal-title">Prefix and Suffix</h4>
                        </div>
                        <div class="modal-body">
                          <iframe width="530" height="320" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/RPqxNqO8u-A"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reveal-wrapper">
                  <a href="#" data-target="#subTopic3" data-toggle="modal"><div class="reveal-content">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/pGOYlbXbN0o?controls=0"></iframe>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div></a>
                  <div class="reveal-top">
                        <h1>Direct and Indirect Speech</h1>
                  </div>

                  <div id="subTopic3" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <h4 class="modal-title">Direct and Indirect Speech </h4>
                        </div>
                        <div class="modal-body">
                          <iframe width="530" height="320" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/pGOYlbXbN0o"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reveal-wrapper">
                  <a href="#" data-target="#subTopic4" data-toggle="modal"><div class="reveal-content">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/9PgFbTK2jUI?controls=0"></iframe>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div></a>
                  <div class="reveal-top">
                        <h1>Adverbs</h1>
                  </div>

                  <div id="subTopic4" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <h4 class="modal-title">Adverbs</h4>
                        </div>
                        <div class="modal-body">
                          <iframe width="530" height="320" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/9PgFbTK2jUI"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>

             <section class="vid-row">
              <div class="item-box reveals">         
                <div class="reveal-wrapper">
                  <a href="#"><div class="reveal-content">
                    <video width="100%" height="100%" controls>
                      <source src="mov_bbb.mp4" type="video/mp4">
                      <source src="mov_bbb.ogg" type="video/ogg">
                      Your browser does not support HTML5 video.
                    </video>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div></a>
                  <div class="reveal-top">
                        <h1>Video</h1>
                  </div>
                </div>
                <div class="reveal-wrapper">
                  <a href="#"><div class="reveal-content">
                    <video width="100%" height="100%" controls>
                      <source src="mov_bbb.mp4" type="video/mp4">
                      <source src="mov_bbb.ogg" type="video/ogg">
                      Your browser does not support HTML5 video.
                    </video>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>             
                  </div></a>
                  <div class="reveal-top">
                        <h1>Video</h1>
                  </div>
                </div>
                <div class="reveal-wrapper">
                  <a href="info.html"><div class="reveal-content">
                    <video width="100%" height="100%" controls>
                      <source src="mov_bbb.mp4" type="video/mp4">
                      <source src="mov_bbb.ogg" type="video/ogg">
                      Your browser does not support HTML5 video.
                    </video>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div></a>
                  <div class="reveal-top">
                        <h1>Video</h1>
                  </div>
                </div>
                <div class="reveal-wrapper">
                  <a href="#"><div class="reveal-content">
                    <video width="100%" height="100%" controls>
                      <source src="mov_bbb.mp4" type="video/mp4">
                      <source src="mov_bbb.ogg" type="video/ogg">
                      Your browser does not support HTML5 video.
                    </video>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div></a>
                  <div class="reveal-top">
                        <h1>Video</h1>
                  </div>
                </div>
              </div>
            </section>

            <footer>
              
            </footer>

             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
             <script type="text/javascript" src="../js/script.js"></script>
	 </body>
</html>

