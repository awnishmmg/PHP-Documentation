<?php


//wap in php to show constants are global inside class

define('GRAVITY',10);
printf("The value of GRAVITY AT GLOBAL SCOPE :%d \n",GRAVITY);
$gravity = 9.8;
printf("The value of gravity AT GLOBAL SCOPE :%d \n",$gravity);

class Test{
private $g; //instance variable
private $G; //instance variable ===> 10

public function __construct(){	 //constructor

	$this->G = GRAVITY; //10
	$this->g = $gravity; // local varaible $gravity ---> assign g

	printf("The value of GRAVITY inside method :%d \n",GRAVITY); 
	printf("The value of gravity inside method :%d \n",$gravity); //undefined variable g
	printf("The value of gravity using g for class :%d \n",$this->g); //undefined variable g
	printf("The value of gravity using G for class :%d \n",$this->G);

}

}
$test = new Test();






?>