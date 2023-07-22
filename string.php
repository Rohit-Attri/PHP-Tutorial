<?php
$value = "this is a string. let's check it's functions";
echo strlen($value);
echo "<br/>";
echo strtoupper($value);
echo "<br/>";
echo strtolower($value);
echo "<br/>";
echo str_word_count($value);
echo "<br/>";
echo strrev($value);
echo "<br/>";
echo trim($value,"Ts");//it removes the specified character or white spaces from the string from both sides 
echo "<br/>";
echo ucfirst($value);
echo "<br/>";
echo ucwords($value);



?>