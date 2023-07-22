<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demo';


try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $qry = "CREATE TABLE `demodata` (`Srno.` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `phone` INT(10) NOT NULL , PRIMARY KEY (`Srno.`));";
    $result = mysqli_query($conn,$qry);
    if($result){
        echo "Table has created successfully";
    }

} catch (Exception $e) {
    echo "Error Occured " . $e->getMessage();
}
?>