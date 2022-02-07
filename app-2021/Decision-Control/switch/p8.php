<?php

//wap in php to show exit from chaining effect.

$n = readline('Enter the no B/w 1 to 5:');
switch($n){
case 1:
	echo "case 1 is executing \n";
	goto exit_label;
case 2:
	echo "case 2 is executing \n";

case 3:
	echo "case 3 is executing \n";

case 4:
	echo "case 4 is executing \n";


default:
	echo "default case 10 is executing \n";
}
exit_label:;
