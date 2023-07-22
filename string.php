<?php
$name = "Rohit is good boy";
echo "$name";
echo "<br>";
echo "This String have " . strlen($name) . "  Characters";
echo "<br>";
echo "The reverse of  String is " . strrev($name);

// dot (.) operator is use to concatinate the strings in php 
echo "<br>";
echo "The Postion of is " . strpos($name, "is");
echo "<br>";
echo "Rohit is replaced here as " . str_replace("Rohit", "Mohit", $name);
echo "<br>";
$driver_age = 45;
if ($driver_age > 25 && $driver_age < 65) {
    echo "You can drive";
} else {
    echo "You can not Drive!";
}
echo "<br>";

// $star = "*";
// for($i = 1; $i<=5; $i++){

//     for($j = 1; $j<=$i ; $j++){
//         echo($star);
//     }
//     echo ("<br>");
// }

// $star = "*";
// for ($i = 1; $i <= 5; $i++) {

//     for ($k = 1; $k <= 5 - $i; $k++) {
//         echo ("&nbsp;&nbsp;");
//     }

//     for ($j = 1; $j <= $i; $j++) {
//         echo ($star);
//     }
//     echo ("<br>");
// }


// the below code is for triangle pattern
$star = "*";
$x=20;
for ($i = 1; $i <= $x; $i++) {

    for ($k = 1; $k <= $x - $i; $k++) {
        echo ("&nbsp;&nbsp;");
    }

    for ($j = 1; $j <= $i; $j++) {
        echo ($star);
    }

    for ($l = 2; $l <= $i; $l++) {
        echo ("*");
    }
    echo ("<br>");
}

echo("<br/>");
echo(date("jS, F , Y, g:i:s "));

?>