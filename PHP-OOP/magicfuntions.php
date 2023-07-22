<?php
class magic{
    private $name = 'Rohit Attri';
    private $email = 'test@gmail.com';
    private $username = 'Coder';
    private $password = '1234';
    function __construct() {
        echo "I am a constructor<br/>";
    }
    function __destruct(){
        echo "Script has ended<br/>";
    }
    function __invoke($a){
        echo "I am invoke function and runs when we call onject as a method ".$a." <br/>";
    }
    function __toString(){
        return "when ever we will print the object diretly this __tostring function will be called automaticaly<br/>";
    }
    function __sleep(){
           return ['name','username','password','email'] ;
    }
}
$obj = new magic();
$obj("Hello invoke!");
echo $obj;
print_r($obj);
$s = serialize($obj);
echo $s;

?>