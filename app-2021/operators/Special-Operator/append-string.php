<?php

//wap in PHP to show append Operation in string

$name='ravi';
$lname = ' Kumar Singh';

$name = $name.$lname;
echo $name;

echo PHP_EOL;

$name='ravi';
$lname = ' Kumar Singh';
$name .=$lname; //concate
echo $name;
echo PHP_EOL;
$name .=$lname; //append
echo $name;

