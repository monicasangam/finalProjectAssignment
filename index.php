<!DOCTYPE html>
<html>
<head>
    <style>
        body
        {
            background-color: aquamarine;
        }
    </style>
    <meta charset="UTF-8">
    <title>PHP Project</title>
</head>

<body>
<?php

//display errors in php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include('header.php');
session_start();
echo "username = ".$_SESSION["username"];
echo "user_id = ".$_SESSION["user_id"];

if(isset($_SESSION["username"]) == false) {
    $pageId = 1 ;
}
else {
    $pageId = 2 ;
}

echo "pageId = ".$pageId;

switch($pageId) {
    case 1:
        include('login.php');
        break;

    case 2:
        include('list.php');
        break;

    case 3:
        include('crud.php');
        break;

    default:;
        include('login.php');
}

include('footer.php');
?>

</body>
</html
