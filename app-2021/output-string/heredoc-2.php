<?php

//wap in php to show here doc string syntax as processed string
$a=100;
echo <<<BLOCK
This a Here Doc String, $a \n
	"This is again New Line of string "$a" "
'This string is inside $a single Qoutes \t tabbed' = $a

BLOCK;

$a=100;
echo <<<"BLOCK"
This a Here Doc String, $a \n
	"This is again New Line of string "$a" "
'This string is inside $a single Qoutes \t tabbed' = $a

BLOCK;







?>

