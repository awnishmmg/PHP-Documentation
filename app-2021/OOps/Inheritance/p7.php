<?php

//wap in php to cyclic Inheritance
//Child Extends ---> Papa ----> extends ---> Child
 
class OldPapa{

public function bike(){	
	echo "bike method from Old Papa \n";
}

public function roti(){
	$obj = new Beta();
	$obj->roti(); #is-relationship
}

}

class Beta extends OldPapa{
	
public function cycle(){
	echo "cycle method from Beta \n";
}

public function roti(){
	echo "1-Roti method from Beta \n";
}

}

$oldpapa = new OldPapa();
$oldpapa->bike();
$oldpapa->roti();

$beta = new Beta();
$beta->cycle();
$beta->roti();














