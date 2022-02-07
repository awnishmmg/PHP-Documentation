<?php

//wap in php to show setter and getter

class User{

public $name;
public $class;
public $rollno;
public $sub=[];
			
public function create($name,$class,$rollno,$sub){ //setter

$this->name = $name;
$this->class = $class;
$this->rollno = $rollno;
$this->sub = $sub;

}

public function getName(){ //getter
	return $this->name;
}

public function getRollno(){ //getter
	return $this->rollno;
}
public function getClass(){ //getter
	return $this->class;
}

public function getsub(){ //getter
	return $this->sub;
}

public function userInfo(){ //method
   echo "User name : {$this->name} \n";
   echo "User class : {$this->class} \n";
   echo "User rollno : {$this->rollno} \n";
   echo "User subject : ".implode(',',$this->sub)." \n";
}

}

$user = new User();

$user->create('Ram','12th',1001,['PHP','HTML','JAVA']);
echo "User name from getter {$user->getName()} \n";
echo "User class from getter {$user->getClass()} \n";
echo "User Rollno from getter {$user->getRollno()} \n";
echo "User subject from getter ".implode(',',$user->getsub())." \n";
$user->userInfo();




