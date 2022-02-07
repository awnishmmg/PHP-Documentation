<?php

//wap in php to show program to show no-return type of constructor

class Test{

public function __construct(){

	echo 'Constructor is called Automatically..';
	echo PHP_EOL;
	return 10;
}

}

#object creation
$test = new Test();
$test = new Test;
echo $test;  //Implicitly Called and cannot be returned.
$x = $test->__construct(); //Explicitly called as method can be returned.
echo $x;









