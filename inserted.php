<?php
    session_start();

    $fname = $_POST['fname'];
    print("First Name is:" .$fname. "</br>");
    $lname = $_POST['lname'];
    print("Last Name is:" .$lname. "</br>");
    $email = $_POST['email'];
    print("Email is:" .$email. "</br>");
    $phone = $_POST['phone'];
    print("Phone is:" .$phone. "</br>");
    $birthday = $_POST['birthday'];
    print("Birthday is:" . $birthday. "</br>");
    $gender = $_POST['gender'];
    print("Gender is:" .$gender. "</br>");
    $password = $_POST['password'];
    $password2 = password_hash($password,PASSWORD_BCRYPT);
    print("Password is:" .$password2. "</br>");
    echo '<h1>You are now registered</h1>';

    mysql_connect("sql1.njit.edu","ms792","bSzrOJUh","ms792");
    mysql_select_db("accounts");
    $select = "insert into accounts(email,fname,lname,phone,birthday,gender,password)VALUES('".$email."','".$fname."','".$lname."','".$phone."','".$birthday."','".$gender."','".$password2."')";
    $sql = mysql_query($select);

    print '<script type="text/javascript">';
    print 'alert("The data is inserted")';
    print '</script>';

    mysql_close();
    header("Location:login.php");
?>
