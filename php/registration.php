<!DOCTYPE html>
<html>
<head>
    <title>Registration Here</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/registration-style.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <script type="text/javascript" src="../js/registration.js"></script>

</head>
<body>
<div class="body">
    <?php include "header.php"?>
<div class="content">
    <form class="reg-form" method="post" action="data.php" onsubmit="return validation()">
        <fieldset>
            <legend>
                <div class="heading">Registration  Form</div>
            </legend>
            <fieldset>
                <legend>
                    <div class="name" >First Name</div>
                </legend>
                <input type="text" name="firstName" placeholder="Enter your first name" required>
            </fieldset>

            <fieldset>
                <legend>
                    <div class="name">Last Name</div>
                </legend>
                <input type="text" name="lastName" placeholder="Enter your Last name" required>
            </fieldset>

            <fieldset>
                <legend>
                    <div class="email">Email</div>
                </legend>
                <input type="text" id="email" name="email" placeholder="example@mail.com">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="pass">Password</div>
                </legend>
                <input type="password" id="password" name="password" placeholder="Enter your Password">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="number">Mobile Number</div>
                </legend>
                <input id="phone" type="text" name="phoneNumber" placeholder="Enter mobile number">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="date">Date Of Birth</div>
                </legend>
                <input type="date" name="birthDate" placeholder="MM/DD/YYYY" required>
            </fieldset>

            <fieldset>
                <legend>
                    <div class="gender">Gender</div>
                </legend>
                <select class="gender-option" name="gender" required>
                    <option selected>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </fieldset>

            <fieldset>
                <div>
                    <button name="submit">Submit</button>
                </div>
            </fieldset>
        </fieldset>

    </form>



</div>
</body>