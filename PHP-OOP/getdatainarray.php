<?php

class getdata
{
    public $conn;
    function connect($servername, $username, $password, $dbname)
    {
        $conn = new mysqli($servername, $username, $password, $dbname);
        $this->conn = $conn;
    }
    function getdbdata($arr, $column, $table)
    {
        $query = "SELECT `{$column}` FROM `{$table}`";
        $arrdata = $arr;
        $result = mysqli_query($this->conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arrdata, $row[$column]);
                echo "
                <ul>
                    <li>{$row[$column]}</li>
                </ul>";
            }
        }
        return $arrdata;
    }
}

$obj = new getdata();
$obj->connect("localhost","root","","registration");
$data = [];
echo "<br/>";
print_r($obj->getdbdata($data, "email", "users"));
// we can create object a class inside another class inside a function only we can create directly as property

?>