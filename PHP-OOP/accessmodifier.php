<?php
class car
{
    public $cname;
    public $name;
    public $color;
    public function set_name($cname, $name)
    {
        $this->cname = $cname;
        $this->name = $name;
    }
    protected function show()
    {
        return "Your car is " . $this->name . " of " . $this->cname. " <br/> " ;
    }
    private function set_more($cname, $name, $color)
    {
        $this->cname = $cname;
        $this->name = $name;
        $this->color = $color;
        return "Your car is " . $this->name . " of " . $this->color . " color of " . $this->cname. " <br/> ";

    }
    public function use_protected_methods()
    {
        return $this->show();
        //like this we can use protected and private methods
    }
    public function use_private_method($cnamep, $namep, $colorp)
    {
        $cname = $cnamep;
        $name = $namep;
        $color = $colorp;
        echo $this->set_more($cname, $name, $color);
    }
}

class sportcars extends car
{
    public function superclass_methods()
    {
        echo $this->show();
        // echo $this->set_more("Maruti Suzuki", "Swift", "Red");  it will show an error because it's a private method we can not use in child class as well
    }
}

$swift = new car();
$swift->set_name("Maruti Suzuki", "Swift");
echo $swift->name;
echo $swift->cname;
// echo $swift->show(); //error because method is protected
// echo $swift->set_more("Maruti Suzuki", "Swift", "Red"); //error because method is private
echo $swift->use_protected_methods();
$swift->use_private_method("Maruti Suzuki", "Swift", "Red");

$avantador = new sportcars();
$avantador->set_name("Lamborghini", "Avantador");
$avantador->superclass_methods();


?>