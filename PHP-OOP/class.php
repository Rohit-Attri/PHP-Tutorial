<?php
class fruits {
    public $name;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$apple = new fruits();
$apple->set_name('Apple');
echo $apple->get_name()."<br/>";
$banana = new fruits();
$banana->set_name('Banana');
echo $banana->get_name();
$specialfruit = new fruits();
//the below code will show warning but it will work
// $specialfruit->fact = "<br/>This variable is created through object";
// echo $specialfruit->fact;
// echo $apple->fact;//this line will through an error because that fact property is created by another object it wasn't in the class


class vari {
 public $value;
}

$obj1 = new vari();
$obj1->value = "<br/>Hello";
echo $obj1->value;




?>