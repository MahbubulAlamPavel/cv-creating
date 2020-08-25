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
        echo "New record created successfully !";
    }else{
        echo "Error: " . $query . " " . mysqli_error($connection);
 }
    mysqli_close($connection);
}
