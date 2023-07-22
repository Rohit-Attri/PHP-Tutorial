<?php
trait add{
    public $name1 = 'my name add trait';
    public function adition($a,$b){
        return $a+$b;
    }
    // public $data = "hello";
    function show(){
        echo "I am of add trait";
    }
}
trait sub{
    public $name2 = 'my name sub trait';
    public function substract($a,$b){
        return $a-$b;
    }
    // public $data = "hi";
    function show(){
        echo "I am of sub trait";
    }
}
trait dev{   
     public $name3 = 'my name dev trait';
    public function devide($a,$b){
        return $a/$b;
    }
    function show(){
        echo "I am of dev trait";
    }
}

class demo{
    use add,sub{
        sub::show insteadof add,dev;
        add::show as addshow;
        sub::show as subshow;
        dev::show as devshow;
    }
    use dev;
    function print(){
        echo "i am a function of demo class ".$this->name1." ";
    }
}

$obj =new demo();
echo $obj->adition(4,7);
echo "<br/>";
echo $obj->name1;
echo "<br/>";
echo $obj->substract(4,7);
echo "<br/>";
echo $obj->name2;
echo "<br/>";
echo $obj->devide(4,7);
echo "<br/>";
echo $obj->name3;
echo "<br/>";
$obj->print();
echo "<br/>";
$obj->show();
echo "<br/>";
// $obj->addshow();
// $obj->subshow();
// $obj->devshow();


?>