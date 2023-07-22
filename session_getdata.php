<?php
echo "we are getting data from session in this file.";
session_start();
if(isset($_SESSION['username'])){
    echo "<br/>welcome".$_SESSION['username'];
    echo "<br/>Your Fav. color is ".$_SESSION['favcolor'];
}else {
    echo "<br/>Please start your session first";
}


?>