<?php

//wap in PHP to show Exception Handling
$x = readline('Enter the x value :');
$y = readline('Enter the y value :');
$result = 0;
try{
	echo "Block of Try Started...\n";
	
	$result = $x/$y;	

	echo "Block of Try Endeded...\n";

}catch(Exception $e){

echo "Some Exception Raised ".$e->getMessage();
echo "\n";

}finally{
echo "This Block will be, executed....\n";
echo "The Result = $result \n";

}
