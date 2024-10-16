<?php 
include 'vendor/autoload.php';
echo "\n<br>";
echo "Hello, welcome to composer tutorial";

$vegetableObject = new Vegetable("Brinjal","purple");
// $test = $vegetableObject->isEdible();
$test = $vegetableObject->getColor();
echo "<br>";
print_r($test);


$spinachObject = new Spinach();
// $test = $vegetableObject->isEdible();
$test2 = $spinachObject->cook();
$test2 = $spinachObject->isCooked();
echo "<br>";
print_r($test2);
?>