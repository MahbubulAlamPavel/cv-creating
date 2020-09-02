<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Your Resume</title>
    <link rel="stylesheet" href="../style/dashboard-style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial scale=1">
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

            <form action="/action_page.php">
                <i class="fa fa-user-circle-o" style="font-size:130px"></i>
            </form>

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
</body>
