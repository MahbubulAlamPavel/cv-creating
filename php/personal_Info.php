<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Create Your Resume</title>
    <link rel="stylesheet" href="../style/personal-style.css" >
    <meta name="viewport" content="width=device-width, initial scale=1.0">
</head>
<div class="body">
<div class="row-top">
    <img class="img" src="../logo.png" alt="HTML5 Icon" align="left"/>
    <div class="column-top">
        <li><a href="home.php" class="navigation">Home</a></li>
        <li><a href="#" class="navigation">Dashboard</a></li>
        <li><a href="#" class="navigation">About Us</a></li>
        <li><a id="logout" href="home.php" class="logout">Logout</a></li>
    </div>
</div>
        <div class="back">
            <a href="dashboard.php">&#x2190;Back</a>
        </div>
    <div class="personal-info">
        <h3>Personal Info</h3>

        <div class="left">
            <form class="form-left">
                <p>First Name</p>
                <input type="text" placeholder="Enter your first name">

                <p>Email</p>
                <input type="email" placeholder="Enter your email address">

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
            </form>

        </div>

        <div class="right">
            <form class="form-right">
                <p>Last Name</p>
                <input type="text" placeholder="Enter your last name">

                <p>Phone Number</p>
                <input type="tel" placeholder="Enter your phone number">

                <p>Date Of Birth</p>
                <input type="date" placeholder="Enter your birth date">

                <p>Gender</p>
                <select class="gender">
                    <option selected>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </form>
        </div>
        <form class="form-bottom">
            <p>Present Address</p>
            <textarea></textarea>

            <p>Designation</p>
            <input type="text" class="designation" placeholder="Enter your designation">
        </form>
    </div>
        <div class="save-continue">
             <a href="dashboard.php" class="save">Save</a>
             <a href="career.php" class="continue">Continue</a>
        </div>
</div>
</body>
</html>