<?php

    session_start();
    echo '<h1>You are logged in now</h1>';

        $username = $_GET['username'];
        print("Username is: " .$username. "</br>");

        $password = $_POST['password'];
        $password2 = md5(PASSWORD_BCRYPT);
        print("Password is:" .$password2. "</br>");

echo 'Hello = '.$username;

header("Location:profile.php");

?>
