<?php
class demo{
    public $name;
    public $email;
    function __construct($name,$email){
           $this->name = $name;
           $this->email = $email;
    }
    public function show(){
          echo $this->name." has an email id ".$this->email;
    }

    public function f1(){
        echo "this is function f1 with no perameter";
    }
    // public function f1($name){
    //     echo "this is function f1 with no perameter";
    // } we can not acheive method overloading in php
}

class child extends demo{
    public $age;
    function __construct($name,$email,$age){
           $this->name = $name;
           $this->email = $email;
           $this->age = $age;
    }
    public function show(){
          echo $this->name." is ".$this->age." years old and has an email id ".$this->email;
    }
}

$obj = new child("Rohit","rohitattri@gmail.com",25);
$obj->show();


?>