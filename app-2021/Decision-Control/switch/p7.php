<?php

error_reporting(0);

//wap in php to show chaining effect in switch

$x = readline('Enter the x value:');

switch($x%2){
case 1:
	echo "Odd \n";
case 0: 
	echo "even \n";
default:	
	echo "default case \n";
}
