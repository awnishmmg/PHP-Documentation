<?php

//Protected Modifiers
// Concepts remains same for, methods

class Tatoo{

protected $location = 'shoulder-back';
public function __construct(){
	echo "Access by mindi within in the class {$this->location} \n";
}
	
}

class parents extends Tatoo{

public function __construct(){
	echo "Access by ".__CLASS__." of mindi in the class {$this->location} \n";
}

}

class Friend extends Tatoo{

public function __construct(){
	echo "Access by ".__CLASS__." of mindi in the class {$this->location} \n";
}	
	
}

class Husband extends Tatoo{
	
public function __construct(){
	echo "Access by ".__CLASS__." of mindi in the class {$this->location} \n";
}
	
}

$tatoo = new Tatoo();
#echo "Access from Outside the Scope of Class {$tatoo->location} \n ";
$parents = new Parents();
$Friend = new Friend();
$Husband = new Husband();



