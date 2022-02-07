<?php

//wap in php to Hybrid Inheritance
// In Hybrid Inheritance, More than 2 Parents Classes Are required
 

class Papa1{

public function scooty(){	
	echo "Scooty method from Papa1 \n";
}

}

class Papa2{

public function bike(){	
	echo "Scooty method from Papa2 \n";
}

}


class Beta Implements Papa1,Papa2,papa3,papa4,....n{
	
public function cycle(){
	echo "Bike method from Beta \n";
}

}


$papa1 = new Papa1();
$papa1->scooty();

$papa2 = new Papa2();
$papa2->bike();









