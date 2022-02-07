<?php
//wap in php to show priority of local and global scope of variable
$a=10;
echo "The value of a at global scope is : $a"; //10
echo PHP_EOL; 

function display(){
$b=200;
global $a; //get the variable from heap
echo "The value of global a at local scope  is : $a";  //10
echo PHP_EOL;
echo "The value of local b at local scope  is : $b"; //200
echo PHP_EOL;
$a=300;
echo "The value of local a at local scope  is : $a"; //300
echo PHP_EOL;

}
display();
echo PHP_EOL;
echo "The value of a at global scope is : $a";  //300
