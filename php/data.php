<?php
include_once "config.php";
if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $birthDate = $_POST['birthDate'];
    $gender = $_POST['gender'];

    $hash = password_hash($password, PASSWORD_BCRYPT);

    $query ="INSERT INTO registration(firstName,lastName,email,password,phoneNumber,birthDate,gender) 
             VALUES('{$firstName}','{$lastName}','{$email}','{$hash}','{$phoneNumber}','{$birthDate}','{$gender}') ";

    if (mysqli_query($connection, $query)) {
        echo("<script>alert('Successful Registration');</script>");
        echo("<script>window.location = 'login.php';</script>");
    }else{
        echo("<script>alert('This Email Already Exist');</script>");
        echo("<script>window.location = 'registration.php';</script>");
    }
    mysqli_close($connection);
}
if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password= $_POST['password'];

    $sql = "select * from registration where email = '$email'";
    $result = mysqli_query($connection, $sql);

 if($rows = mysqli_fetch_assoc($result)){
     $db_password = $rows['password'];
     if(password_verify($password,$db_password)){
         header("location: dashboard.php");
     }else{
         echo "<script>alert('Wrong Password')</script>";
         echo("<script>window.location = 'login.php';</script>");

     }
 }else{
     echo "<script>alert('Incorrect Email')</script>";
     echo("<script>window.location = 'login.php';</script>");
 }
}