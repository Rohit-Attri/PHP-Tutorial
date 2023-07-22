<?php
abstract class developer
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract protected function intro();
}

// $obj = new developer('Rohit'); we can not create object of abstract class

class Php extends developer
{
    function print()
    {
        echo "this function is of Php class";
    }
    public function intro()
    {
        echo "Hi I am {$this->name} and I am a php developer";
    }
}

class Java extends developer
{
    function print()
    {
        echo "this function is of java class";
    }
    public function intro()
    {
        echo "Hi I am {$this->name} and I am a Java developer";
    }
}
class Python extends developer
{
    function print()
    {
        echo "this function is of Python class";
    }
    public function intro()
    {
        echo "Hi I am {$this->name} and I am a Python developer";
    }
}

abstract class parentclass
{
    abstract protected function prefix($name);
}

class childclass extends parentclass
{
    public function prefix($name)
    {
        if ($name == 'Rohit Attri') {
            $prefix = "Mr.";
        } elseif ($name == 'Aayushi Sharma Attri') {
            $prefix = 'Mrs.';
        } else {
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

class childclass2 extends parentclass
{
    // public function prefix($name,$operator,$greet) this will show an error because there is only one require argument in parent abstarct class but there are three required argument they should be optional for creating optional arguments we have initialize there value ate the point of decleration as below
    public function prefix($name, $operator = ".", $greet = "Dear")
    {
        if ($name == 'Rohit Attri') {
            $prefix = "Mr.";
        } elseif ($name == 'Aayushi Sharma Attri') {
            $prefix = 'Mrs.';
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix} {$name}{$operator}";
    }
}

$obj1 = new Php("Rohit");
$obj1->print();
echo "<br/>";
$obj1->intro();
echo "<br/>";
$obj2 = new Java("Gopal");
$obj2->print();
echo "<br/>";
$obj2->intro();
echo "<br/>";
$obj3 = new Python("Sachin");
$obj3->print();
echo "<br/>";
$obj3->intro();
echo "<br/>";
$obj4 = new childclass();
echo $obj4->prefix('Rohit Attri');
echo "<br/>";
echo $obj4->prefix('Aayushi Sharma Attri');
echo "<br/>";
echo $obj4->prefix('Any Name');
echo "<br/>";
$obj5 = new childclass2();
echo $obj5->prefix("Rohit Attri", ".", "Dear");
echo "<br/>";
echo $obj5->prefix('Aayushi Sharma Attri');
echo "<br/>";
echo $obj5->prefix('Any Name');
echo "<br/>";


?>