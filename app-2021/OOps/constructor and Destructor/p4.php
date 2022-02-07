<?php

//wap in PHP to show parameterised constructor

class Test{

public function __construct($name,$roll){	
	echo $name;
	echo PHP_EOL;
	echo $roll;
}
}


$test = new Test('Ravi',100);



