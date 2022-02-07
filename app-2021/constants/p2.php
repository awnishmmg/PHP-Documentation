<?php
//wap in to case sensitive constants

define('gravity',10); 			//lowercase
define('GRAVITY',9.8); 			//uppercase
define('Gravity','Free fall'); 		//Capatalise
define('GrAvItY','This is Gravity'); 	//mixed

echo gravity;
echo PHP_EOL;

echo GRAVITY;
echo PHP_EOL;

echo Gravity;
echo PHP_EOL;

echo GrAvItY;
echo PHP_EOL;




