<!DOCTYPE html>
<html>
<head>
    <title>Registration Here</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/registration-style.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
</head>
<body>
<div class="row-top">
    <img class="img" src="../logo.png" alt="HTML5 Icon" align="left"/>
    <div class="column-top">
        <li><a href="home.php" class="navigation">Home</a></li>
        <li><a href="dashboard.php" class="navigation">Dashboard</a></li>
        <li><a href="#" class="navigation">About Us</a></li>
        <li><a href="login.php" class="navigation">Login</a></li>
    </div>
</div>
<div class="content">
    <form class="reg-form">
        <fieldset>
            <legend>
                <div class="heading">Registration  Form</div>
            </legend>
            <fieldset>
                <legend>
                    <div class="name">First Name</div>
                </legend>
                <input type="text" placeholder="Enter your first name">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="name">Last Name</div>
                </legend>
                <input type="text" placeholder="Enter your Last name">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="email">Email</div>
                </legend>
                <input type="email" placeholder="Enter your Email">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="pass">Password</div>
                </legend>
                <input type="password" placeholder="Enter your Password">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="number">Mobile Number</div>
                </legend>
                <input type="tel" placeholder="Enter mobile number">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="date">Date Of Birth</div>
                </legend>
                <input type="date" placeholder="MM/DD/YYYY">
            </fieldset>

            <fieldset>
                <legend>
                    <div class="gender">Gender</div>
                </legend>
                <select class="gender-option">
                    <option selected>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </fieldset>

            <fieldset>
                <div>
                    <button>Submit</button>
                </div>
            </fieldset>
        </fieldset>

    </form>
</div>
</body>