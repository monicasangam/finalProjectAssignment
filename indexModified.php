<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>PHP Project</title>
    <style>
        body{
            background-color: lightpink;
            color: black;
        }
    </style>
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
    else if(isset($_SESSION["user_id"]) == 1)
    {
        $pageId = 2 ;
    }
    else
        {
            $pageId = 4;
        }

echo "pageId = ".$pageId;

switch($pageId) {
    case 1:
        include('login.php');
        break;

    case 2:
        include('accountList.php');
        break;

    case 3:
        include('accountCrud.php');
        break;

    case 4:
        include('todoList.php');
        break;

    case 5:
        include('todoCrud.php');
        break;

    default:;
        include('login.php');
}

include('footer.php');
?>

</body>
</html>
