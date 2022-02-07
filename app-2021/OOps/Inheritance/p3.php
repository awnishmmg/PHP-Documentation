<?php

//wap in php to show multi-level Inheritance

class Baba{

public function property(){	
	echo "Baba has 1 Acre Property \n";
}

}

class Papa extends Baba{

public function bike(){	
	echo "Bike method from Papa \n";
}

}

class Beta extends Papa{
	
public function cycle(){
	echo "Cycle method from Beta \n";
}

}

$papa = new Papa();
$papa->bike();
$papa->property();

$beta = new Beta();
$beta->cycle();
$beta->bike();
$beta->property();


$baba = new Baba();
$baba->property();








