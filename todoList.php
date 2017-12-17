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
        body
        {
            background-color: lightpink;
            color:black;
        }
    </style>
</head>

<body>

<?php

function __autoload($class_name)
{
    //class directories
    $directorys = array(
        '/'
    );
    //for each directory
    foreach ($directorys as $directory) {
        //see if the file exsists
        if (file_exists($directory . $class_name . '.php')) {
            require_once($directory . $class_name . '.php');
            //only require the class once, so quit after to save effort (if you got more, then name them something else
            return;
        }
    }
}
include "model/ToDoQueryModel.php";
include "collection/Map.php";
include "db/Connection.php";
include "display/TableFormatter.php";

session_start();

$database = db\dbConnection::getConnection();
$todoQueryModel = new model\ToDoQueryModel();
$todoMap = new collection\Map($todoQueryModel);

echo "check if user_id = ".$_SESSION["user_id"];
$records = $todoMap->findAll($database, $_SESSION["user_id"]);
echo '<h1>Select all Records in Todos Table</h1>';
$htmlTable = new display\HTMLTable();

?>
<form action="todoList.php" method="post" enctype="multipart/form-data">
    <?php
    $_SESSION["operation"]="VIEW";
    $htmlTable->todoListFormat($records);
    ?>
</form>
</body>
</html>
