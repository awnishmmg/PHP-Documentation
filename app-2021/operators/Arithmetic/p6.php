
<?php

//wap in php to find the remainder without % Operator 
//using floor


$x=readline('Enter the x value:');
$y=readline('Enter the y value:');

$Q = $x/$y;  
echo $Q;
echo PHP_EOL;
$rem = $x-(floor($Q)*$y);
echo $rem;















