<?php
namespace inherit;
class demo{
    public $name;
    public $email;
    protected $phone;
    private $id;
    function __construct(){
        echo "this constructor is inside the demo class<br>";
    }
    public function set_values($name,$email,$phone,$id){
             $this->name = $name;
             $this->email = $email;
             $this->phone = $phone;
             $this->id = $id;
    }
    public function show_private(){
        echo "<br/>".$this->id;
    }

}

class childdemo extends demo{
    public function message(){
         echo "<br/>this function is inside the childdemo class";
    }
    public function protected_parent(){
        echo "<br/>".$this->phone;
    }
}


$obj = new childdemo();
$obj->set_values("Rohit","rohit@gmail.com","88687678843","1");
echo $obj->name;
echo $obj->email;
$obj->show_private();
$obj->message();
$obj->protected_parent();
// echo $obj->phone;
// echo $obj->id; //these both will throw an error because these are protected and private variables respectively


?>