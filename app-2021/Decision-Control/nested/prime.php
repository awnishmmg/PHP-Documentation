<?php

//wap in php to show number is prime or not from range 1 to 100
$n = readline('Enter the Number:');
if($n<=100){
if($n%2==0){
	if($n==2)
		echo "$n is Prime";
	else
		echo "$n is Not Prime";
}else if($n%3==0){

	if($n==3)
		echo "$n is Prime";
	else
		echo "$n is Not Prime";
	
}else if($n%5==0){
	if($n==5)
		echo "$n is Prime";
	else
		echo "$n is Not Prime";
}else if($n%7==0){
	if($n==7)
		echo "$n is Prime";
	else
		echo "$n is Not Prime";
	
}else if($n%11==0){
	if($n==11)
		echo "$n is Prime";
	else
		echo "$n is Not Prime";
	
}else{
	echo "$n is Prime";
}

}else{
    echo 'Enter the Number less then or equal to 100';
}





