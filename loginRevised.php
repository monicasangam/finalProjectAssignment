<?php
namespace {
    ?>
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
    <h1>User Login</h1>

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
            '/finalProject/'
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

    include "model/UserQueryModel.php";
    include "db/Connection.php";

    session_start();

    echo '<h1>Login Page</h1>';
    $database = db\dbConnection::getConnection();
    $userQueryModel = new model\UserQueryModel();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $authenticate = $userQueryModel->authenticate($_POST["username"], $_POST["password"], $database);
        if ($authenticate == -1) {
            $error = "Login failed. Please check username/password";
            $_SESSION["username"] = null;
            $_SESSION["password"] = null;
            $_SESSION["user_id"] = null;
        } else {
            $error = "logged in ";
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["user_id"] = $authenticate;

            echo "user id now set = ".$_SESSION["user_id"];
        }
        echo $error;
        echo "username1 = ".$_POST["username"];
        header("index.php");
    }

    ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <h1>User Login</h1>

        <label>Username</label>
        <input type="text" name="username" value="enter username" id="username"></br>
        <br>
        <label>Password</label>
        <input type="password" name="password" value="enter password" id="password"></br>
        <br><br>

        <input type="submit" name="submit" value="Submit">


    </form>
    </body>

    </html>

    <?php
}
?>
