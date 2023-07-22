<?php
echo 'this example is of exception handeling<br/>';
// function devide($devidend, $devisor)
// {
//     if ($devisor == 0) {
//         throw new Exception("devision by zero");
//     }
//     return $devidend / $devisor;
// }

function devide($devidend, $devisor)
{
    if ($devisor == 0) {
        throw new Exception("devision by zero", 6);
        //this second perameter is optional and we use it just to identify the similar type of exceptions by providing same code to all
    }
    return $devidend / $devisor;
}

try {
    echo devide(5, 0);
} catch (Exception $e) {
    echo $e->getMessage() . "<br/>";
    echo $e->getLine() . "<br/>";
    echo $e->getCode() . "<br/>";
    echo $e->getFile() . "<br/>";
}

// try {
//     echo devide(5, 6);
// } catch (Exception $e) {
//      echo $e->getMessage()."<br/>";
//      echo $e->getLine()."<br/>";
//     //  echo $e->getCode()."<br/>";  i don't know what this function does
//     echo $e->getFile()."<br/>";
// }finally{
//     echo "it will run every time even exception is caught or not ";
// }



?>