
<?php


//wap in php to show super global power

$GLOBALS['A'] = 100;
$GLOBALS['B'] = 200;

function display(){

echo $GLOBALS['A'];
echo PHP_EOL;
echo $GLOBALS['B'];

//$A=$GLOBALS['A'];
//$B=$GLOBALS['B'];

//echo PHP_EOL;
//echo $A;
//echo PHP_EOL;
//echo $B;
//global $A,$B;
extract($GLOBALS);
echo PHP_EOL;
echo $A;
echo PHP_EOL;
echo $B;

}
display();