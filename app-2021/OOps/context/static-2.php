<?php

//wap in php to show static keyword

function increments(){

static $i=0;
echo 'Before Incrementing..'.PHP_EOL;
echo $i;
echo PHP_EOL;
$i++;
echo 'After Incrementing..'.PHP_EOL;
echo $i;
echo PHP_EOL;

}

increments();
increments();
increments();
increments();