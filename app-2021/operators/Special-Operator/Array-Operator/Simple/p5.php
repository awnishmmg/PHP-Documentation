<?php

//wap in php to + Operation in Array with Duplicate Subscript
$x=[10,20,30,40];
$y =[100,200,300,400,500];

echo "The count of x :".count($x);
echo PHP_EOL;
echo "The count of y :".count($y);
echo PHP_EOL;

var_dump(count($x)==count($y));
print_r($x);
print_r($y);

print_r($x+$y); //$x.add($y)
print_r($y+$x); //$y.add($x)


//Overwrite the Duplicate and Insert the Unique
// Total Array = Extra Element + Replaced Element 



