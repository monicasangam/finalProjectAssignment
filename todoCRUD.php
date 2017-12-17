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
ini_set('display_errors', on);
error_reporting(E_ALL);
define('DATABASE','ms792' );
define('USERNAME', 'ms792');
define('PASSWORD', 'bSzrOJUh');
define('CONNECTION', 'sql1.njit.edu');
function __autoload($class_name)
{
    //class directories
    $directorys = array(
        'classes/'
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


include "model/AccountsQueryModel.php";
include "model/ToDoQueryModel.php";
include "collection/Map.php";
include "db/Connection.php";
include "display/TableFormatter.php";

session_start();

$database = db\dbConnection::getConnection();
$todoQueryModel = new model\ToDoQueryModel();
$accountsMap = new collection\Map($todoQueryModel);

echo "check if id = ".$_SESSION["id"];
echo "check if user_id = ".$_SESSION["user_id"];
echo "check if username  = ".$_SESSION["username"];
echo "check if operation  = ".$_SESSION["operation"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$columnValues
    //$_POST["username"]
    //COLUMN_VALUES
    if($_SESSION["operation"]=="DELETE") {
        include "model/ToDoCRUDModel.php";
        $todoCRUDModel = new model\ToDoCRUDModel();
        $todoCRUDModel->delete($_SESSION["id"], $database);
        header("list.php");
    }
    if($_SESSION["operation"]=="EDIT") {

        include "model/ToDoCRUDModel.php";
        $todoCRUDModel = new model\ToDoCRUDModel();
        $columnNames = array("ownerEmail","ownerId","createdDate","dueDate","message","isDone");
        $columnValues = array("manasa@njit.edu","3","08-23-12","999-232-2442","practice homework","1");
        $todoCRUDModel->save($_SESSION["id"],$columnNames,$columnValues,$database);
        $_SESSION["operation"]="VIEW";
        header("list.php");
    }
    else
        if($_SESSION["operation"]=="VIEW")
            $_SESSION["operation"]= "EDIT";


}

$records = $toDoSMap->findOne($_SESSION["id"], $database);
echo '<h1>Select One Record in Todos Table</h1>';
$htmlTable = new display\HTMLTable();

?>


<form action="todoCRUD.php" method="post" enctype="multipart/form-data">
    <?php
    if($_SESSION["operation"]=="VIEW")
        $htmlTable->todoListFormat($records);
    else
        $htmlTable->todoCRUDFormat($records);

    ?>
    <input type="submit" name="Edit" value="<?php if($_SESSION["operation"]=="VIEW") echo "EDIT"; if($_SESSION["operation"]=="EDIT") echo "SAVE"; ?>"  ">
    <input type="submit" name="Delete" value="Delete" onclick="<?php $_SESSION["operation"]=="DELETE";?>">
</form>

<?php

?>


</body>
</html>
