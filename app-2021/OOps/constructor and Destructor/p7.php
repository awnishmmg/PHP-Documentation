<?php

//wap in php to show program to show no-return type in parameterised constructor 

class Test{
public function __construct($a){

	echo 'Parameterised Constructor is called Automatically..';
	echo PHP_EOL;
	return $a+100;
}

}

#object creation
$test = new Test(200);
//echo $test;  //Implicitly Called and cannot be returned.
$x = $test->__construct(200); //Explicitly called as method can be returned.
echo $x;









