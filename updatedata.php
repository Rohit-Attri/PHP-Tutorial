<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demo';


try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $qry = "UPDATE `demodata` SET `name` = 'Sohan' WHERE `Srno.` > 8;";
    $qry2 = "UPDATE `demodata` SET `email` = 'sohan@gmail.com'  WHERE `name` = 'Sohan'";
    $result = mysqli_query($conn, $qry2);
    $aff = mysqli_affected_rows($conn);
    echo "Number of afeected rows".$aff;
    if(!$result){
        echo "<br/>unable to update data";
    }else{
        echo "<br/>Data Updated Successfully";
    }

} catch (Exception $e) {
    echo "Error Occured" . $e->getMessage();
}


?>