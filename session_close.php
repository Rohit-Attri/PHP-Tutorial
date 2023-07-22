<?php
echo 'In this file we are gonna close the session';
session_start();
session_unset();
session_destroy();
echo "<br/>session has been close!";
?>