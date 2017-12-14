<?php
namespace model;

ini_set('display_errors', on);
error_reporting(E_ALL);
define('DATABASE','ms792' );
define('USERNAME', 'ms792');
define('PASSWORD', 'bSzrOJUh');
define('CONNECTION', 'sql1.njit.edu');

include "model/GenericCRUDModel.php";

class UserCRUDModel1 extends GenericCRUDModel
{
    public function __construct()
    {
        $this->tableName = 'user';
        $this->columnNames = array ("user_id","username","firstname","lastname","email","password");
    }



}

?>
