<?php

//wap in php to show chaining effect in switch

$n = readline('Enter the no B/w 1 to 9:');

$i=1;
switch($n){
case 1:
	echo "case 1  ".$i++." is executing \n";
	//goto exit_label;
	//return;
	//exit;
	break;
case 2:
	echo "case 2 ".$i++." is executing \n";
	break;
case 3:
	echo "case 3 ".$i++." is executing \n";
	break;
case 4:
	echo "case 4 ".$i++." is executing \n";
	break;
case 5:
	echo "case 5 ".$i++." is executing \n";
	break;
case 6:
	echo "case 6 ".$i++." is executing \n";
	break;
case 7:
	echo "case 7 ".$i++." is executing \n";
	break;
case 8:
	echo "case 8 ".$i++." is executing \n";
	break;
case 9:
	echo "case 9 ".$i++." is executing \n";
	break;
default:
	echo "default case 10 is executing \n";
	break;
}
//exit_label:
print('This is executing...');