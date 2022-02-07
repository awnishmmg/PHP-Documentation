<?php

//wap in php to + Operation in Array with Duplicate Subscript
$x=[10,20,30,40];
//$y =[100,200,300,400] or you can declare as below

$y[0]=100;     
$y[1]=200;
$y[2]=300;
$y[3]=400;

echo "The count of x :".count($x);
echo PHP_EOL;
echo "The count of y :".count($y);
echo PHP_EOL;

var_dump(count($x)==count($y));
print_r($x);
print_r($y);

print_r($x+$y); //$x.add($y)
print_r($y+$x); //$y.add($x)

var_dump(($x+$y)==($y+$x)); //equal
var_dump(($x+$y)!=($y+$x)); //unequal

var_dump(($x+$y)===($y+$x)); //equal Not Identical

var_dump(($x+$y)==($x)); //equal
var_dump(($x+$y)===($x)); //Identical

var_dump(($y+$x)==($y)); //equal
var_dump(($y+$x)===($y));  //Indentical

var_dump(($x+$y)!==($y+$x)); //Not Identical




