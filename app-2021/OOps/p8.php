<?php

class Tv{

public $color = 'black';
public $size = '56 inch';
public $price = 250000;
public $type = 'LED';
public $company = 'LG';


public function info(){

echo "The color : {$this->color} \n ";
echo "The size : {$this->size} \n ";
echo "The price : {$this->price} \n ";
echo "The type : {$this->type} \n ";
echo "The company : {$this->company} \n ";

}

public function on(){
	echo "Tv on \n ";
}

public function off(){
	echo "Tv off \n ";
}

public function volup(){
	echo "volume ++ \n ";
}

public function voldown(){
	echo "volumne -- \n ";
}

}

(new Tv)->info(); //Anonymous Object
(new Tv)->volup(); //Anonymous Object
(new Tv)->voldown(); //Anonymous Object

$remote1 = new Tv; //reference Object
$remote1->info(); //reference Object
$remote1->volup(); //reference Object
$remote1->voldown(); //reference Object

$remote2 = new Tv; //reference Object
$remote2->info(); //reference Object
$remote2->volup(); //reference Object
$remote2->voldown(); //reference Object



