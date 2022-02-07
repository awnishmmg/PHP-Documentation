
<?php 

//wap in php to magic constants : __FUNCTION__ and __CLASS__ and __METHOD__

class Tv{

public function display(){
	
	echo PHP_EOL;	
	echo "Called from display method from class ".__CLASS__." = ".__METHOD__;
        echo PHP_EOL;	
	echo "Called from display method from ".__CLASS__.": ".__FUNCTION__;
	echo PHP_EOL;
	echo "The method name for Class TV = ".__CLASS__.'::'.__FUNCTION__;
	echo PHP_EOL;
	var_dump((__CLASS__.'::'.__FUNCTION__)==__METHOD__);
}

}


function display(){

	echo "Called from display function: ".__METHOD__;
        echo PHP_EOL;
	echo "Called from display function: ".__FUNCTION__;
	
}
display();

$class = new Tv();
$class->display();







