<?php
$var = "10";
$var = 60;
$var3 = 1056;
$var2 = 'rohit@gmail.com';
$var4 = 'http://yahho.com';
$var5 = '192.2.103.255';
$var6 = '89-43-41-94-4D-A0';


$options = array(
    'options' => array(
        'min_range' => 20,
        'max_range' => 60
    )
);
//the below code will be true for both values it will consider it as integer in first one
// $res = filter_var($var, FILTER_VALIDATE_INT,$options);
$res = filter_var($var, FILTER_VALIDATE_INT);
$res2 = filter_var($var2, FILTER_VALIDATE_EMAIL);
$res3 = filter_var($var3, FILTER_VALIDATE_FLOAT);
// $res3 = filter_var($var3, FILTER_VALIDATE_FLOAT,$options);
$res4 = filter_var($var4, FILTER_VALIDATE_URL);
// $res4 = filter_var($var4, FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED);
// $res4 = filter_var($var4, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED);
$res5 = filter_var($var5, FILTER_VALIDATE_IP);
$res6 = filter_var($var6, FILTER_VALIDATE_MAC);
if ($res) {
    echo $var . " is an integer <br/>";
} else {
    echo "<br/>please enter an integer value";
}
if ($res2) {
    echo $var2 . " is a correct email<br/>";
} else {
    echo "<br/>please enter a valid email";
}
if ($res3) {
    echo $var3 . " is a float number<br/>";
} else {
    echo "<br/>please enter a valid float";
}
if ($res4) {
    echo $var4 . " is a valid url<br/>";
} else {
    echo "<br/>please enter a valid url";
}
if ($res5) {
    echo $var5 . " is a valid IP<br/>";
} else {
    echo "<br/>please enter a valid IP";
}
if ($res6) {
    echo $var6 . " is a valid MAC Adderess<br/>";
} else {
    echo "<br/>please enter a MAC address";
}

// key point is in float verification it automatically converts the int into float and shows true


?>