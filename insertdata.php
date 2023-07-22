<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demo';


try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // $qry = "INSERT INTO `demodata`(`Srno.`,`name`,`email`,`phone`) VALUES ('1','Rohit','rohit@gmail.com','9058711779');";
    // as srno. is auto increment and primary key than we can skip insertion of it.
    $qry = "INSERT INTO `demodata`(`name`,`email`,`phone`) VALUES ('Mohit','mohit@gmail.com','9988998877');";
    $result = mysqli_query($conn,$qry);
    if($result){
        echo "Data has Entered Successfully";
    }
} catch (Exception $e) {
    echo "Error Occured" . $e->getMessage();
}

?>