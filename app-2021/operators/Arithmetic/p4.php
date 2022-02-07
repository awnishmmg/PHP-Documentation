<?php

//wap in php to find the remainder without % Operator 
//using Type-casting


$x=readline('Enter the x value:');
$y=readline('Enter the y value:');

$Q = $x/$y;  
//echo getType($Q);
//echo PHP_EOL;
$Q = intval($Q);
//echo getType($Q);
//echo PHP_EOL;
echo $Q;
$rem = $x-($Q*$y);
echo PHP_EOL;
echo $rem;












