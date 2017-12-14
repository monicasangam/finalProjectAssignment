<?php

namespace display;

ini_set('display_errors', on);
error_reporting(E_ALL);
define('DATABASE','ms792' );
define('USERNAME', 'ms792');
define('PASSWORD', 'bSzrOJUh');
define('CONNECTION', 'sql1.njit.edu');

class HTMLTable
{
    public function simpleFormat($data)
    {
        echo '<table>';
        foreach ($data as $rowData)
        {
            //echo($rowData);
            echo "<tr>";
            foreach ($rowData as $key=>$value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    public function listFormat($data)
    {
        echo '<table border ="1">';
        $rowCount = 0;
        foreach ($data as $rowData)
        {
            $columnCount = 0;
            if($rowCount==0) {
                echo "<tr>";
                foreach ($rowData as $key => $value) {
                    if ($columnCount > 7)
                        echo "<td>$key</td>";
                    $columnCount++;
                }
                echo "</tr>";
            }
            $rowCount++;
        }


        $rowCount = 0;
        foreach ($data as $rowData)
        {
            $columnCount = 0;

            echo "<tr>";
            foreach ($rowData as $key=>$value) {
                if($columnCount == 0)
                    $_SESSION["id"] = $value;
                if($columnCount>7)
                    echo "<td>".'<a href="https://web.njit.edu/~ms792/finalProject/crud.php">'.$value."</a>"."</td>";

                $columnCount++;
            }
            echo "</tr>";


            $rowCount++;
        }
        echo "</table>";
    }

    public function crudFormat($data)
    {
        echo '<table border ="1">';

        $rowCount = 0;
        foreach ($data as $rowData)
        {
            $columnCount = 0;

            echo "<tr>";
            foreach ($rowData as $key=>$value) {
                if ($columnCount > 7) {
                    echo "<td>" . "<label>$key</label>" . "</td>";
                    echo "<td>" . "<input type=\"text\" name="."COLUMN_VALUES".$key." value=$value id="."COLUMN_VALUES".$key.">" . "</td>";
                }
                $columnCount++;
            }
            echo "</tr>";


            $rowCount++;
        }
        echo "</table>";
    }
}

?>

?>
