<?php
class demo {
    function f1(){
        echo "Hello ";
        return $this;
    }
    function f2(){
        echo "Hiiii ";
        return $this;
    }
    function f3(){
        echo "Byee ";
    }
}
$obj = new demo();
$obj->f1()->f2()->f3();
// $obj->f2();
// $obj->f3();
//in php we perform method chaining by returning the function to the object by using $this keyword we can follow the same process in iheritance and using traits as well 



?>