<?php

//wap in php to, show difference B/w raw and processed in the combination.

//escape character sequence
#echo ''''; //invalid
#echo """"; //invalid

echo  'The line is \n single tabbed and "\t double" tabbed.';
echo PHP_EOL;
echo  "The line is \n single tabbed and '\t double' tabbed.";

//with variable
echo PHP_EOL;
$a=100;
echo  'The value of $a is : "$a" ';
echo PHP_EOL;
echo  "The value of $a is : '$a' ";
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo  'The value of $a is : '.$a;
echo PHP_EOL;
echo  'The value of $a is : "'.$a.'"';
echo PHP_EOL;
echo PHP_EOL;
echo  'The value of $a is : '."'$a'";
echo 'This is single "Qoutes 'using' string"';



