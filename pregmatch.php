<?php
$var  = 'this is the string where i am gonnna use the pregmatch the method';
// $preg = preg_match('/The/i',$var);
// $preg = preg_match_all('/The/i',$var,$array);
$preg = preg_match_all('/The|string|use/i',$var,$array);
// we will use above method when we are searching a value which is there more than once.
// if($preg){
//     echo "match found";
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
// }else{
//     echo "match not found";
// }


// in the above code i is modifier which is use to make statement !case sensitive
//we can search or match numbers and even single characters as well by following the same procedure





//these are the test questions
// $var2 = 'Sector62 Noida';
// for($i=0;$i<strlen($var2);$i++){
//     if(!preg_match("/^[0-9]$/",$var2[$i])){
//         echo $var2[$i];
//     }else{
//         break;
//     }
// }

// $arr1 = array(1,2,3,4,6,7,8,9,8);
// $arr2 = array(3,4,5,6,7);
// $length1 = count($arr1);
// $length2 = count($arr2);
// $sum1 = 0;
// $sum2 = 0;
// if($length1<=$length2){
//     for($i=0;$i<$length1;$i++){
//           $sum1 = $sum1+$arr1[$i];
//     }
//     for($i=0;$i<$length1;$i++){
//         $sum2 = $sum2+$arr2[$i];
//     }
// }
// if($length2<$length1){
//     for($i=0;$i<$length2;$i++){
//           $sum1 = $sum1+$arr1[$i];
//     }
//     for($i=0;$i<$length2;$i++){
//         $sum2 = $sum2+$arr2[$i];
//     }
// }
// $sum3 = $sum1+$sum2;
// echo $sum3;
?>