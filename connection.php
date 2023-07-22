<?php
// create a connection to mysql 
$servername = 'localhost';
$username = 'root';
$password = '';
$dabname = 'registration';
// we have two ways to connect db through php 
// Mysqli extension
//PDO

//by mysqli extension

// $conn = mysqli_connect($servername,$username,$password,$dabname);
// echo var_dump($conn); to check what are we getting and we will get an object 

// In mysqli extension we have to use try catch to handle error in php
try {
    $conn = mysqli_connect($servername, $username, $password, $dabname);
    if ($conn) {
        echo "Your Connection was Successful!";
    }

} catch (Exception $e) {
    echo "There is an error occured during connection" . $e->getMessage();
}
?>