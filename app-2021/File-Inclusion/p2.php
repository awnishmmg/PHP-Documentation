<?php

//p2.php

require_once 'p1.php';
require_once'p1.php';
require_once 'p1.php';
require_once 'p1.php';

echo PHP_EOL;
echo 'Code from p2.php';
$b = 100;
echo PHP_EOL;
echo $b;
echo PHP_EOL;
echo "value of a = $a from file p1.php";
echo PHP_EOL;

test();
test();
test();




print_r(get_included_files());

