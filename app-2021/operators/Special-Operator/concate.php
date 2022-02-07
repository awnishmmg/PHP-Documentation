<?php

//wap in php to string concatenation

$x='life';
$y=' partner';

var_dump(getType($x));
var_dump(getType($y));
var_dump($x.$y); //concatenation
var_dump(getType($x.$y));

$x=10;
$y=20;
var_dump($x.$y);
var_dump(getType($x.$y));

$result = 'The sum is = ';
echo $result.($x+$y);

//Note : PHP Allows Mathematical 
//Evaluation, Only after using brackets
//Other wise non-numeric Encountered
//Error will be thrown.
















