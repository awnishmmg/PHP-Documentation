<?php


$fp = fopen('saurabh.txt','r');

$txt = fgets($fp,0);
echo json_encode($txt);



?>
