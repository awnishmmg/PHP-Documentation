<?php

//wap in php show how to Run external script from internal script


for($i=250;$i<257;$i++){
	$output = '';
	$n=$i;
	echo '*************Running Test Case :'.$i."\n";
	$output = shell_exec("php p10.php {$n}");
	echo PHP_EOL;
	$output .= $output;
 	echo PHP_EOL;
	echo "The Output = $output";
	exit;
}






