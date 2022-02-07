<?php

//wap in php to find the remainder without % Operator 
// In order to find: modulus, in PHP you have to use Remainder Theoram.
// Dividend = Divisor * Quotient + R
// g(x) = f(x)*h(x)+R(x)


$x=readline('Enter the x value:');
$y=readline('Enter the y value:');

printf("The division = %d \n",$x/$y);
printf("The division = %f \n",$x/$y);
$rem1 = $x % $y; 
echo "The remainder using modulo Operator = $rem1";

$Q = $x/$y; //Quotient
$rem2 = $x-($Q*$y);

echo PHP_EOL;

echo "The remainder without using modulo Operator = $rem2";


// Conclusion : since Q is completly is divided we can never get the Answer












