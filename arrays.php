<?php
$arr = [2, 3, 5, 7, 5, 4, 6, 8];
$arr3 = [2, 3, 5, 7, 8, 65, 4, 3, 5, 7];
$arr2 = [
    "rohit" => "blue",
    "mohit" => "red",
    "gopal" => "white",
    "sachin" => "no one can tell"
];

//array methods
echo "The length of array is " . count($arr);
echo "<br/>";
echo "After using array_push()" . array_push($arr, "rohit", "mohit"); // it will return the length of array after adding all the given values
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "After using array_pop()" . array_pop($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "After using array_unshift()" . array_unshift($arr, "hello", "hi");
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "After using array_shift()" . array_shift($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "After using sort()" . sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "After using rsort()" . rsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "After using ksort()" . ksort($arr2);
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "After using asort()" . asort($arr2);
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "After using array_diff()";
echo "<pre>";
print_r(array_diff($arr, $arr3));
echo "</pre>";
function myfunction($a, $b)
{
    if ($a == $b) {
        return 'same';
    }
    return $a;
}
echo "<pre>";
print_r(array_map(function ($item){
    return strtoupper($item);
},$arr2));
// print_r(array_map("myfunction", $arr, $arr3));
echo "</pre>";



?>