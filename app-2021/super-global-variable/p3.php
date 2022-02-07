<?php

//wap in php to find, sum of n numbers using command line arguments.
print_r($argv);

$sum=0;
$avg=0;
for($i=1;$i<$argc;$i++){
	$sum = $sum+(int)$argv[$i];
}
printf("The sum = %d \n",$sum);
$avg = $sum/($argc-1);
printf("The average = %d \n",$avg);