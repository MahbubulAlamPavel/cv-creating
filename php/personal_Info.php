<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Create Your Resume</title>
    <link rel="stylesheet" href="../style/personal-style.css" >
<!--    <meta name="viewport" content="width=device-width, initial scale=1.0">-->
</head>
<body>
<div class="body">
    <?php include "header.php"?>
        <div class="back">
            <a href="dashboard.php">&#x2190;Back</a>
        </div>
    <div class="personal-info">
        <h3>Personal Info</h3>

        <div class="left">
            <form class="form-left">
                <p>First Name</p>
                <input id="fname" type="text" placeholder="Enter your first name">

                <p>Email</p>
                <input id="email" type="email" placeholder="Enter your email address">

                <p>Blood Group</p>
                <select class="blood">
                <option selected>A+</option>
                <option>B+</option>
                <option>O+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>B-</option>
                <option>O-</option>
                <option>AB-</option>
                </select>

                <p>Marital Status</p>
                <select class="blood">
                <option selected>Married</option>
                <option>Unmarried</option>
                <option>Divorced</option>
                </select>
        </div>


        <div class="right">
                <p>Last Name</p>
                <input id="lname" type="text" placeholder="Enter your last name">

                <p>Phone Number</p>
                <input id="phone" type="tel" placeholder="Enter your phone number">

                <p>Date Of Birth</p>
                <input type="date" placeholder="Enter your birth date">

                <p>Gender</p>
                <select class="gender">
                    <option selected>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
        </div>

          <div class="bottom">
            <p>Present Address</p>
            <textarea id="address"></textarea>

            <p>Designation</p>
            <input id="designation" type="text" class="designation" placeholder="Enter your designation">
          </div>


        </div>


        <div class="save-continue">
             <button onclick="window.location.href='dashboard.php';" class="save">Save</button>
             <button onclick="window.location.href='career.php';" class="continue">Continue</button>
        </div>

    </form>
</div>
<script src="../js/main.js"></script>
</body>
</html>