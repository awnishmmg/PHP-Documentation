<?php
// wap in php to show syntax Error
// Since we cannot re-declare the signature(or definition) of Function since it 
// generates the, Fatal Error,hence it is possible at least in PHP for the current // Version to support method overloading

function test(){

echo 'Hello from Test Function'.PHP_EOL;
}

test();

//Re-declaration of Test Function
function test(){

echo 'Hello from Test Function'.PHP_EOL;
}

$a=10;
echo $a;
