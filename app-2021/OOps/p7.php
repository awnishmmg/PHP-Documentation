<?php

//wap in php to show setter and getter
// setter : @method
// getter : @method
 
class Test{

public $a = 10; #variable public : are global varaible
public $b = 20; #variable public : are global varaible
var $c=30;  #variable public : are global varaible 

public function setValue($a,$b,$c){

$this->a = $a; //local
$this->b = $b; //local
$this->c = $c; //local

}

public function getValue(){
	echo " The value of a from getter = {$this->a} \n";
	echo " The value of b from getter= {$this->b} \n";
	echo " The value of c from getter = {$this->c} \n";
}

}

$test = new Test();

echo "The value of memeber a before setter = {$test->a} \n";
echo "The value of memeber b before setter = {$test->b} \n";
echo "The value of memeber c before setter = {$test->c} \n";

$test->setValue(100,200,300); //setter 

echo "The value of memeber a after setter = {$test->a} \n";
echo "The value of memeber b after setter = {$test->b} \n";
echo "The value of memeber c after setter = {$test->c} \n";

$test->getValue(); //getter 