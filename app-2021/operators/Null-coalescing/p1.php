<?php

//supress Operator @: supress Operator or Notice Operator : error Operator.
// never use @ Operator because, Debugging is important.

$x=20;
echo "The value of x: $x"; //20
echo PHP_EOL;
echo "The value of y:".@$y; //undefined variable y.
$z=10;
$z=isset($z)?$z:null;
echo PHP_EOL;
echo "The value of z using ternary:".$z; //undefined variable z.
var_dump($z);
$z=isset($z)??null;
echo PHP_EOL;
echo "The value of z using NullCoalescing:".$z; //undefined variable z.
var_dump($z);

$p = (5<2)??null;
echo PHP_EOL;
var_dump($p);

if($p){
 echo 'P if Running by NullCoasing';
}else{
  echo 'P else Running by NullCoasing';
}

$p = (5<2)?'':null;
echo PHP_EOL;
var_dump($p);

if($p){
 echo 'P if Running by ternary';
}else{
 echo 'P else Running by ternary';
}




