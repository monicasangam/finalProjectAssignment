<?php
namespace model;

ini_set('display_errors', on);
error_reporting(E_ALL);
define('DATABASE','ms792' );
define('USERNAME', 'ms792');
define('PASSWORD', 'bSzrOJUh');
define('CONNECTION', 'sql1.njit.edu');

include "model/GenericQueryModel.php";

class UserQueryModel extends GenericQueryModel
{
    public $id;
    public $ownerEmail;
    public $ownerId;
    public $createdDate;
    public $dueDate;
    public $message;

    public function __construct()
    {
        $this->tableName = "user";
        $this->model = $this;
    }

    public function authenticate($username, $password, $database) {

        $modelAttributes = array ("username"=>$username, "password"=>$password);
        $recordSet = $this->query ($modelAttributes, $database);

        foreach ($recordSet as $rowData)
        {
            foreach ($rowData as $key=>$value) {
                if($key=="user_id")
                $userId = $value;
            }
        }
        if(empty($recordSet)==true)
            return -1;
        else
            return $userId;
    }
}

?>
