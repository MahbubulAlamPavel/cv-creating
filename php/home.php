<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
      <title>SP Resume | The Largest CV Hub</title>
      <link rel="stylesheet" href="../style/home-style.css" >
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial scale=1.0">
  </head>
<body>
    <?php include "header.php"?>
        <div class="welcome">
            <h1>Create Your Standard Resume</h1>
            <p>Follow a few steps to build your perfect resume and get hired faster</p>
            <div class="build">
                <?php
                if(isset($_SESSION['loggedin'])):
                ?>
                <li><a class="build" href="dashboard.php">Build Now</a> </li>
                <?php
                else:
                ?>
                <li><a class="build" href="login.php">Build Now</a> </li>
                <?php
                endif;
                ?>
            </div>
        </div>

     <div class="bottom">
        <div class="bottom-left" align="left">
            <h3 class="explore">Explore Us</h3>
            <li><a href="#" class="contact">About</a></li>
            <li><a href="#" class="contact">Contact</a></li>
            <li><a href="#" class="contact">Blog</a></li>
            <li><a href="#" class="contact">Build Resume</a></li>
        </div>
        <div class="bottom-right">
            <h3 class="legal">Legal</h3>
            <li><a href="#" class="contact">Terms and Conditions</a></li>
            <li><a href="#" class="contact">Privacy </a></li>
            <li><a href="#" class="contact">Cookies</a></li>
            <li><a href="#" class="contact">Security</a></li>
        </div>
         <div class="bottom-centre">
             <p class="dev">Design and Developed By</p>
             <p class="name">Mahbubul Alam Pavel</p>
             <ul class="social">
             <a href="https://www.facebook.com/pavel.khan.71/" class="fa fa-facebook"></a>
             <a href="https://www.instagram.com/pavel_khan16" class="fa fa-instagram"></a>
             <a href="https://www.linkedin.com/in/mahbubul-alam-pavel-888202189/" class="fa fa-linkedin"></a>
             </ul>
         </div>
     </div>

        <div class="copy-right">
            <p>Copyright &copy; 2020 SP-Resume. All Rights Reserved.</p>
        </div>



    </div>
</body>


</html>
