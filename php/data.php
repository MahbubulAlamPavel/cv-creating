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
        echo("<script>alert('Successful Registration')</script>");
        echo("<script>window.location = 'login.php';</script>");
    }else{
        echo("<script>alert('Already Registered!')</script>");
        echo("<script>window.location = 'registration.php';</script>");
 }
    mysqli_close($connection);
}