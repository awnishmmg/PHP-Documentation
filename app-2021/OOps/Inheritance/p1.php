<?php

//wap in php to show multi-level class

class A{

public function __construct(){
	$this->doA();
}

public function doA(){
echo 'A Work is done at 1st level class';
echo PHP_EOL;
}

}

class B{

public function __construct(){
$this->doB();
}

public function doB(){
echo 'B Work is done at 2nd level class';
echo PHP_EOL;
}

}

class C{

public function __construct(){
$this->doC();

}

public function doC(){
echo 'C Work is done at 3rd level class';
echo PHP_EOL;
}

}

$a = new A();
$b = new B();
$c = new C();
