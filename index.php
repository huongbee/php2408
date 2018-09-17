<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//https://github.com/huongnguyen08/php2

echo "Hello World!!";
echo "<br>";
$a = 7;
$b = 5;

echo 'tong hai so $a va $b la $a+$b='.($a+$b);

echo "<br>";

echo gettype($a);

$c = 2.5;
// $d = "$abc";
$d = '$abc';
echo "<br>";
 
echo $d;
echo "<br>";

$arr = [3,5,7];
$arr2 = array(2,54.6);

print_r($arr);
echo "<br>";

class a{

}

$A = new a();
echo gettype($A);
echo "<br>";



$json = json_encode($arr); //array -> string
$arr3 = json_decode($json);

echo gettype($arr3);
echo "<br>";

echo $json;








?>