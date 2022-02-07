<?php

//wap in php to show, Object Making

class Test{
var $a=10;
var $b=20;
var $c=30;

}

$test = new Test(); //Instantiation or //Heap
var_dump($test);
$test = Test(); //Assignment //stack
var_dump($test);
$test = 10; //Assignment //stack
var_dump($test);

function Test(){
return 'Hy From Test Function';
}


