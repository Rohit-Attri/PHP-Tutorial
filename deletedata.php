<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demo';
try {
    $conn = mysqli_connect($servername, $username, $password , $dbname);
    $qry = "DELETE FROM `demodata` WHERE `email` = 'Sohan@gmail.com'";
    $result = mysqli_query($conn, $qry);
    if (!$result) {
        echo "Unable to delete data";
    } else {
        echo "Data has deleted successfully";
    }
} catch (Exception $e) {
    echo "Error Occured " . $e->getMessage();
}

?>