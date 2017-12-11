<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Project</title>
</head>

<body>

<?php

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

    echo "check if user_id = ".$_SESSION["user_id"];
    $records = $accountsMap->findAll($database, $_SESSION["user_id"]);
    echo '<h1>Select all the Records in Accounts Table</h1>';
    $htmlTable = new display\HTMLTable();

?>


<form action="list.php" method="post" enctype="multipart/form-data">
    <?php
        $_SESSION["operation"]="VIEW";
        $htmlTable->listFormat($records);
    ?>
</form>




</body>
</html>
