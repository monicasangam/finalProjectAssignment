<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Project</title>
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


include "model/AccountQueryModel.php";
include "collection/Map.php";
include "db/Connection.php";
include "display/TableFormatter.php";

session_start();

$database = db\dbConnection::getConnection();
$accountQueryModel = new model\AccountQueryModel();
$accountsMap = new collection\Map($accountQueryModel);

echo "check if id = ".$_SESSION["id"];
echo "check if user_id = ".$_SESSION["user_id"];
echo "check if username  = ".$_SESSION["username"];
echo "check if operation  = ".$_SESSION["operation"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$columnValues
    //$_POST["username"]
    //COLUMN_VALUES
    if($_SESSION["operation"]=="DELETE") {
        include "model/AccountCRUDModel.php";
        $accountCRUDModel = new model\AccountCRUDModel();
        $accountCRUDModel->delete($_SESSION["id"], $database);
        header("list.php");
    }
    if($_SESSION["operation"]=="EDIT") {
        include "model/AccountCRUDModel.php";
        echo "I am here...";
        //$accountCRUDModel = new model\AccountCRUDModel();
        //$accountCRUDModel->save($_SESSION["id"], $columnValues, $database);
        $_SESSION["operation"]="VIEW";
        header("list.php");
    }
    else
    if($_SESSION["operation"]=="VIEW")
        $_SESSION["operation"]= "EDIT";


}

$records = $accountsMap->findOne($_SESSION["id"], $database);
echo '<h1>Select all the Records in Accounts Table</h1>';
$htmlTable = new display\HTMLTable();

?>


<form action="crud.php" method="post" enctype="multipart/form-data">
    <?php
        if($_SESSION["operation"]=="VIEW")
            $htmlTable->listFormat($records);
        else
            $htmlTable->crudFormat($records);

    ?>
    echo "mode = " .$_SESSION["operation"];
    <input type="submit" name="Edit" value="<?php if($_SESSION["operation"]=="VIEW") echo "EDIT"; if($_SESSION["operation"]=="EDIT") echo "SAVE"; ?>"  ">
    <input type="submit" name="Delete" value="Delete" onclick="<?php $_SESSION["operation"]=="DELETE";?>">
</form>

<?php

?>


</body>
</html>
