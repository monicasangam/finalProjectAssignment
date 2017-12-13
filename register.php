<?php

session_start();
echo '<h1>You are now registered</h1>';

$fname = $_GET['fname'];
print("First Name is:" .$fname. "</br>");

$lname = $_GET['lname'];
print("Last Name is:" .$lname. "</br>");

$email = $_GET['email'];
print("Email is:" .$email. "</br>");

$phone = $_GET['phone'];
print("Phone is:" .$phone. "</br>");

$birthday = $_GET['birthday'];
print("Birthday is:" . $birthday. "</br>");

$gender = $_GET['gender'];
print("Gender is:" .$gender. "</br>");


$password = $_GET['password'];
$password2 = md5(PASSWORD_BCRYPT);
print("Password is:" .$password2. "</br>");

header("Location:login.php");


?>
