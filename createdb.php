<?php
$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = mysqli_connect($servername, $username, $password);
    if ($conn) {
        echo 'connection done';
    }

    // to create a database
    $qry = "CREATE DATABASE `demo`;";
    echo "<br/>";
    $result = mysqli_query($conn, $qry);
    // echo var_dump($result);  to check the result object
    if ($result) {
        echo "database created successfully";
    }

    // to delete a database
    // $qry = "DROP DATABASE `demo2`;";
    // $result = mysqli_query($conn,$qry);
    // if($result){
    //     echo "<br/>database has been deleted successfully";
    // }

} catch (Exception $e) {
    echo 'Error Occured ' . $e->getMessage();
}


?>