<!DOCTYPE html>
<html>
<head>
    <title>Login Here</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/login-style.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="image" >
        <img src="../cv.svg">
    </div>
    <div class="form">
        <img class="profile" src="../profile.svg">
        <h2>Welcome</h2>
        <form class="login" action="">
            <h4>User ID</h4>
            <input type="email" placeholder="Enter Your Email" checked>
            <i class="fa fa-user" aria-hidden="true"></i><br><br>

            <h4>Password</h4>
            <input type="password" placeholder="Enter Your Password" checked>
            <i class="fa fa-unlock-alt" aria-hidden="true"></i><br>

            <input type="checkbox" class="check"><span>Remember Password</span><br><br>

            <input type="submit" class="btn" value="login" checked><br><br>
            <a href="#">Forgot Password</a><br><br>
            <a href="registration.php" class="account">Create Account</a>





        </form>

    </div>
</div>
</body>

</html>