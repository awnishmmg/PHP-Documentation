<?php

//wap in php to sort a array with 2 Elements

$a=[30,10];

print_r($a);

$temp = $a[0];   //$temp = $a[$i]
$a[0] = $a[1];   //$temp = $a[$i+1]
$a[1] = $temp;   //$[$i+1] = $temp

print_r($a);

$temp = $a[0];
$a[0] = $a[1];
$a[1] = $temp;

print_r($a);

