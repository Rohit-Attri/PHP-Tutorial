<?php
final class demo2
{
    final function print()
    {
        echo "This is the demo2 class";
    }
    public function add($a, $b)
    {
        return $a + $b;
    }
}
class demo1
{
    final function print()
    {
        echo "This is the demo1 class";
    }
    public function add($a, $b)
    {
        return $a + $b;
    }
}

// try {
//     class child2 extends demo2
//     {
//         function print()
//         {
//             echo "This is the child2 class";
//         }
//     }
// } catch (Exception $e) {
//     echo "An error occured";
// }

try {
    class child1 extends demo1
    {
        function print()
        {
            echo "This is the child1 class";
        }
    }
} catch (Exception $e) {
    echo "an error occured in child1";
}

// $obj = new child2();
$obj1 = new child1();
$obj1->print();
echo $obj1->add(2, 3);



?>