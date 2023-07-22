<?php
class fruit {
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    function __destruct(){
        echo "The fruit you have choosed is ".$this->name;
    }
}

$apple = new fruit("Apple");


?>