<?php
namespace cons;
class demo{
    public $value;
    // function __construct(){
    //     $this->value = "we are calling it through constructor";
    //     echo $this->value;
    // }
    //in php we can not create multiple construct in one class

    function __construct($str){
         $this->value = $str;
         echo $this->value;
    }
}

class fruit{
    public $name;
    function __construct($name){
           $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

}

$obj1 = new demo('I am passing this on creation of object');
$apple = new fruit('Apple');
echo $apple->get_name();
$banana = new fruit('Banana');
echo $banana->get_name();


?>