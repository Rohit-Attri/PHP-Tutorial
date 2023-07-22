<?php
interface Area
{
    public function find_area($a, $b);
}
interface Prints
{
    public function show();
}

class parentclass2{
    protected $name;
    public function show_nanme($name){
        $this->name = $name;
        echo $this->name;
    } 
}

class trianglearea extends parentclass2 implements Area,Prints 
{
    function find_area($a, $b)
    {
        $mul = $a * $b;
        return 1 / 2 * $mul . "cm<sup>2</sup>";
    }
    function show(){
        echo "<br/>I had to override this show method to remove error ";
    }
}
class squarearea implements Area
{
    function find_area($a, $b)
    {
        $mul = $a * $b;
        return $mul . "cm<sup>2</sup>";
    }
}

class rectanglearea implements Area
{
    function find_area($a, $b)
    {
        $mul = $a * $b;
        return $mul . "cm<sup>2</sup>";
    }
}

class circlearea implements Area
{
    function find_area($a, $b)
    {
        $mul = $a * $b;
        return 3.14 * $mul . "cm<sup>2</sup>";
    }
}

$triangle = new trianglearea();
echo "Area Of Triangle is " . $triangle->find_area(10, 15);
$triangle->show();
echo "<br/>";
$triangle->show_nanme('Rohit');
$square = new squarearea();
echo "<br/>Area Of Square is " . $square->find_area(10, 10);
$rectangle = new rectanglearea();
echo "<br/>Area Of rectangle is " . $square->find_area(12, 18);
$circle = new circlearea();
echo "<br/>Area Of Circle is " . $square->find_area(5, 5);

//we can inherite a class during implementing multiple interfaces


?>