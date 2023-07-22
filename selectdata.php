<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demo';

try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // query to select data from table we can use where clause as well in select query
    $qry = "SELECT * FROM `demodata`;";
    $qry2= "SELECT * FROM `demodata` WHERE `Srno.` > '7'";
    $result = mysqli_query($conn, $qry2);
    // echo var_dump($result); to check result variable
    $num = mysqli_num_rows($result);
    //to print the number of row and this result get an associative array
    echo "Total number of data: ". $num; 
    if ($num > 0) {
        // $row = mysqli_fetch_assoc($result);
        //    echo "<br/>".var_dump($row); to check we have got the row or not
        while($row = mysqli_fetch_assoc($result)){
            echo "<br/>" .$row['Srno.']. "." .$row['name']. "'s email is " .$row['email']. " and phone number is " .$row['phone'];
        }
    }

} catch (Exception $e) {
    echo "Error Occured " . $e->getMessage();
}

?>