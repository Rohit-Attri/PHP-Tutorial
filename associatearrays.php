<?php
$arr = array(1, 2, 3, 4, 5, 6, 7);
$arr2 = [1, 2, 3, 4, 5, 7];
echo (var_dump($arr2));
echo ("<br/>");
echo (var_dump($arr));

foreach ($arr as $value) {
    echo ($value);
}

// these are associative arrays
$arra = array(
    "rohan" => "Red",
    "sohan" => "black",
    "mohan" => "blue"
);

foreach ($arra as $key => $value) {
    echo (" <br/> the favriot color of $key is $value");
}


//multidimensional array
// this is 2d array
$mularr = array(
    array(2, 5, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1)
);
echo ("<br/>");
//   echo(var_dump($mularr));
// echo(var_dump($mularr[0]));
// echo("<br/>");
// echo(var_dump($mularr[1]));
// echo("<br/>");
// echo(var_dump($mularr[2]));
// echo(var_dump($mularr[0][0]));
// echo("<br/>");
// echo(var_dump($mularr[1][1]));
// echo("<br/>");
// echo(var_dump($mularr[2][2]));

for ($i = 0; $i < count($mularr); $i++) {
    for ($j = 0; $j < count($mularr[$i]); $j++) {
        echo $mularr[$i][$j];
        echo " ";
    }
    echo ("<br/>");
}


// 3d array
$bappofarrs = array(
    array(
        array(1, 3, 4, 6),
        array(2, 3, 5, 7),
        array(9, 8, 6, 5)
    ),
    array(
        array(5, 4, 7, 8),
        array(7, 3, 6, 2),
        array(0, 5, 1, 8)
    ),
    array(
        array(3, 4, 6, 8),
        array(6, 4, 8, 2),
        array(3, 5, 0, 6)
    )
);
echo var_dump($bappofarrs);
echo ("<br/>");
for ($i = 0; $i < count($bappofarrs); $i++) {
    echo var_dump($bappofarrs[$i]);
    echo ("<br/>");
}
echo ("<br/>");




for ($i = 0; $i < count($bappofarrs); $i++) {
    for ($j = 0; $j < count($bappofarrs[$i]); $j++) {
        for ($k = 0; $k < count($bappofarrs[$i][$j]); $k++) {
            echo $bappofarrs[$i][$j][$k];
            echo " ";
        }
        echo ("<br/>");
    }
    echo ("<br/>");
}
?>