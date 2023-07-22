<?php
echo "Hi this is my first php program <br>";
echo "This is the basic program in php <br>";
echo "Hi this is my first php program <br>";
?>

<!-- we can use multiple php blocks
==>variables<br> -->

<?php
//this is comment tag in php 

/*
this is
muti line 
comment is php
 */
$name = "Rohit";
$age =  25;
echo "The author name is $name and his age is $age"
?>


<?php
/*
data types in php
1.String
2.Number
3.Boolean
4.Float
5.array
6.object
7.null 
 */
$name = "Rohit";
$age =  25;
echo "<br>The author name is $name and his age is $age<br>";
echo var_dump($age);
echo "<br>";
$x = true;
$y = false;
echo var_dump($x,$y);
echo "<br>";
$family = array("rohit","prinshu","guddu");
echo $family[0];
echo "<br>";
echo $family[1];

// in php also we can not create object without class but we can achieve it in javaScript

?>
