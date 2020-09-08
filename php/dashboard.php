<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Your Resume</title>
    <link rel="stylesheet" href="../style/dashboard-style.css">
<!--    <meta name="viewport" content="width=device-width, initial scale=1">-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php include "header.php"?>
    <div class="back">

        <div class="profile-cv">
             <h2>Profile & Cv</h2>
             <a href="personal_Info.php" class="edit">EDIT ON STEPPER</a>
         </div>


        <div class="left">
            <div class="left-info">
             <i class='fa fa-user' style="font-size:20px"></i>
            <p>Personal Info</p>
            <a href="#" class="p-edit">Edit</a>
            </div>

          <div class="user-form">
                <img class="profile-img" src="../profile.png">
            <div class="name">
                <span id="fname"></span>
                <span id="lname"></span>
            </div>

              <div>
                <span id="designation"></span><br><br>
              </div>


            <div class="phone">
                <i class='fa fa-phone'></i>
                <span id="phone"></span><br><br>
                <i class='fa fa-envelope'></i>
                <span id="email"></span><br><br>
                <i class='fa fa-map-marker-alt'></i>
                <span id="address"></span>
            </div>

            </div>

        </div>


        <div class="right">
            <div class="summary-info">
                <div class="top">
                <i class='fas fa-book-reader' style='font-size:20px'></i>
                <p>Career Summary</p>
                <a href="#" class="p-edit">Edit</a>
                </div>
                <div class="text">
                    <p></p>
                </div>
            </div>


            <div class="work-info">
                <div class="work-top">
                    <i class="fas fa-briefcase" style='font-size:20px'></i>
                    <p>Work Experiences</p>
                    <a class="p-edit">Add</a>
                </div>

                <div class="date-left">
                <i class="fas fa-calendar-alt" style='font-size:20px'></i>
                <p class="date">Date</p>
                    <p></p>
                    <a href="#"><i class="fas fa-trash-alt" style='font-size:20px'></i></a>
                    <a href="#"><i class="fas fa-edit" style='font-size:20px'></i></a>
                </div>

            </div>

        </div>

    </div>
<script src="../js/main.js"></script>
<script>
   var fname = window.localStorage.getItem('fname');
   var lname = window.localStorage.getItem('lname');
   var designation = window.localStorage.getItem('designation');
   var  phone = window.localStorage.getItem('phone');
   var email = window.localStorage.getItem('email');
   var address = window.localStorage.getItem('address');

    if(fname && lname && designation && phone && email && address){
        document.getElementById('fname').innerText = fname;
        document.getElementById('lname').innerText = lname;
        document.getElementById('designation').innerText = designation;
        document.getElementById('phone').innerText = phone;
        document.getElementById('email').innerText = email;
        document.getElementById('address').innerText = address;
    }else {
        alert('Please Fill Up All Information');
    }

</script>
</body>
</html>

