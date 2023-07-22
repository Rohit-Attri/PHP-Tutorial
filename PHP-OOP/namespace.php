<?php
include("inheritance.php");
include("constructor.php");

class demomain{
    public $name = "namespace";
    function show(){
        echo "I am a function of {$this->name} program";
    }
}

$obj = new inherit\demo();
$obj2 = new cons\demo("Rohit");
$obj3 = new demomain();
$obj3->show();
?>