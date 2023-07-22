<?php
// class argument {
//     function add($val,...$numbers){
//         $sum = 0;
//         foreach($numbers as $item){
//              $sum += $item;
//         }
//         echo $val;
//         return $sum;
//     }
// }

// $obj = new argument();
// echo $obj->add("The Sum is ",1,2,3,4,5,6,7,5);

// $arr = [2,3,5,6,8];
// $arr = [...$arr,5,6,7,7,8];
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// echo "<br/>";
// $a = 20;
// for($i=0;$i<$a;$i++){
//     for($k=1;$k<$a-$i;$k++){
//         echo "&nbsp;&nbsp;";
//     }
//     for($j=0;$j<=$i;$j++){
//         echo "*";
//     }
//     for($j=1;$j<=$i;$j++){
//         echo "*";
//     }
//     echo "<br/>";
// }
// echo "<br/>";
// // $a = 20;
// for($i=0;$i<5;$i++){
//     for($j=10;$j>0;$j--){
//           echo "*";
//     }
//     echo "<br/>";
// }

//question kind of create an 2d associative array with one associative array
// function groupByOwners(array $files): array
// {
//     $arrnew = array();
//     foreach ($files as $key => $val) {
//         $keyn = $val;
//         $valn = array($key);
//         foreach ($arrnew as $keyarr => $valarr) {
//              if($keyarr == $val){
//                   $valn = array(...$arrnew[$keyarr],$key);
//              }
//         }
//         $arrnew[$keyn] = $valn;
//     }
//     return $arrnew;
// }

// $files = array(
//     "Input.txt" => "Randy",
//     "Code.py" => "Stan",
//     "Output.txt" => "Randy",
//     "index.php" => "Stan",
// );

// var_dump(groupByOwners($files));

// function unique_names(array $array1, array $array2): array
// {
//     // $arrc = array_merge($array1, $array2);
//     // $arrnew = array_unique($arrc);
//     $arrnew = array();
//     foreach ($array1 as $key => $val) {
//         $temp = true;
//         if (empty($arrnew)) {
//             array_push($arrnew, $val);
//         } else {
//             foreach ($arrnew as $keyarr => $valarr) {
//                 if ($valarr == $val) {
//                     $temp = false;
//                     break;
//                 }
//             }
//             if ($temp) {
//                 array_push($arrnew, $val);
//             }
//         }

//     }
//     foreach ($array2 as $key => $val) {
//         $temp = true;
//         if (empty($arrnew)) {
//             array_push($arrnew, $val);
//         } else {
//             foreach ($arrnew as $keyarr => $valarr) {
//                 if ($valarr == $val) {
//                     $temp = false;
//                     break;
//                 }
//             }
//             if ($temp) {
//                 array_push($arrnew, $val);
//             }
//         }

//     }
//     return $arrnew;
// }

// $names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
// // echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
// echo "<pre>";
// print_r($names);
// echo "</pre>";

// $arr1 = [1, 3, 4];
// $arr2 = ['jdb', 'sjxbhs', 'ndcvg'];
// $arrc = array_merge($arr1, $arr2);
// // print_r($arrc);
// echo array_search('jdb',$arr2);


// $arr = array();
// $arr = array(...$arr,"hsvhs");
// $arr = array(...$arr,"vcghdvgc");
// print_r($arr);

$arr = [13, 4, 34, 45, 67, 6, 3, 4, 1, 2, 3, 4, 34, 56, 7, 8, 3412, 1];
$arrnew = array();
//to remove all the duplicate values from an an array and create new one
// for ($i = 0; $i < count($arr); $i++) {
//     $temp = true;
//     if (empty($arrnew)) {
//         array_push($arrnew, $arr[$i]);
//     } else {
//         echo "runelse ";
//         for ($j = 0; $j < count($arrnew); $j++) {
//             echo  "runelsefor ";
//             if ($arrnew[$j] == $arr[$i]) {
//                 $temp = false;
//                 break;
//             }
//         }
//         if ($temp) {
//             array_push($arrnew, $arr[$i]);
//         }
//     }
// }


//store all the dupliacte values from an array
for ($i = 0; $i < count($arr); $i++) {
    $temp;
    $status = false;
    for ($j = 0; $j < count($arr); $j++) {
        if ($j == $i) {
            $temp = $j;
            $status = true;
            break;
        }
        if ($arr[$j] == $arr[$i]) {
            $status = false;
            array_push($arrnew, $arr[$i]);
            break;
        }
    }
    if ($status) {
        for ($k = $temp + 1; $k < count($arr); $k++) {
            if ($arr[$k] == $arr[$i]) {
                array_push($arrnew, $arr[$i]);
                break;
            }
        }
    }
}
echo "<pre>";
print_r($arrnew);
echo "</pre>";
?>