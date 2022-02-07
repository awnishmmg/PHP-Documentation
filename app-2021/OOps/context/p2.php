<?php

//wap in php to show static context

class Test{
public $a=300; #non-static context
public static $b=400; #static context

public function get_a(){ #non-static method

echo  "The value from Non static context = {$this->a} \n";
echo  "The value from Non context = ";
//echo Test::$a; #error due to accessing non-static a from static context
echo PHP_EOL;


}

public static function get_b(){ #static method

//echo  "The value from Non static context {$this->a} \n";

echo PHP_EOL;
echo  "The value from static context = ";
echo Test::$b;
//echo $this->b; #error due to $this Object Context for static context b


}

}

$test = new Test();
$test->get_a(); 
//Test::get_a(); #error get_a scope non static it cannot be called by class context

$test->get_b();
Test::get_b();




