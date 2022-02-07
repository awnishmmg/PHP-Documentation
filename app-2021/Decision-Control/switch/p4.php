<?php

//wap in php to show consonants and vowels

$x = readline("Enter the character :");

(getType($x=='string') and strlen($x)==1 and ctype_alpha($x))?:exit('Invalid Value Supplied.');

$output='';
switch(strtolower($x)){ 

case 'a':
	$output='vowel';
break;
case 'e':
	$output='vowel';
break;
case 'i':
	$output='vowel';
break;
case 'o':
	$output='vowel';
break;
case 'u':
	$output='vowel';
break;

default:
	$output='consonant';
break;
}
echo $output;

// T(A) = 26 --> T(A) = {V,C} ---> T(A) = {{a,e,i,o,u},C}
// T(A) = {a,e,i,o,u}  ---> (1)--> default ---> 

