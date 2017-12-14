<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>PHP Project</title>
</head>

<body>
<?php
//display errors in php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

include('header.php');

?>

<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="signUp.php">Register</a></li>
        <li class="page-item"><a class="page-link" href="login.php">Login</a></li>
        <li class="page-item"><a class="page-link" href="profile.php">Profile</a></li>
        <li class="page-item"><a class="page-link" href="task.php">Tasks</a></li>
        <li class="page-item"><a class="page-link" href="list.php">List Todo Items</a></li>
    </ul>
</nav>

<?php
include('footer.php');
?>

</body>
</html>
