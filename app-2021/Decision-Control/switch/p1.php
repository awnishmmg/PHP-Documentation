<?php

//wap in php to show odd and even using switch


$x = readline("Enter the x value:");
switch(!($x%2==0)){ 

case 0:
	echo "$x is even";
break;

case 1:
	echo "$x is odd";
break;

}


