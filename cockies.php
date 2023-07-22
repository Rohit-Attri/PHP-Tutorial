<?php
echo 'Welcome to the cockies tutorial';
// echo time(); this function provides the time fro 1970 in seconds
$cookie = setcookie('catagory','books',time()+86400,'/');
// echo var_dump($cockie); to check whats it returns and it returns true and false
if($cookie){
    echo '<br/>cookies has been set';
}else {
    echo '<br/>cookies has not been set';
}

?>