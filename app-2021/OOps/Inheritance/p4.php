<?php

//wap in php to Show Heiriechal Inheritance

class Papa{

public function scooty(){	
	echo "Scooty method from Papa \n";
}

}

class Beta extends Papa{
	
public function bike(){
	echo "Bike method from Beta \n";
}

}

class Beti extends Papa{
	
public function cycle(){
	echo "Cycle method from Beti \n";
}

}


$beta = new Beta();
$beta->bike();
$beta->scooty();

$papa = new Papa();
$papa->scooty();

$beti = new Beti();
$beti->cycle();
$beti->scooty();









