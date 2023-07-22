<?php
echo 'welcome to seesion tutorial in php';
// session is used to manage information across different pages
session_start();
$_SESSION['username'] = "Rohit";
$_SESSION['favcolor'] = 'Yellow';
echo "<br/>session has been started";
?>