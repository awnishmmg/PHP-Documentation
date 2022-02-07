<?php


//wap in php to show constants are global

define('GRAVITY',10);
printf("The value of GRAVITY AT GLOBAL SCOPE :%d \n",GRAVITY);

$gravity = 9.8;
printf("The value of gravity AT GLOBAL SCOPE :%d \n",$gravity);


function test(){

printf("The value of GRAVITY AT local SCOPE :%d \n",GRAVITY);
printf("The value of gravity AT local SCOPE :%d \n",$gravity);

}

test();






?>