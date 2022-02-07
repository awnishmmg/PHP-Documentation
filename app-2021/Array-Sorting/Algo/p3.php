<?php
$a = [10,10,10,10,20,30,30,30,40,40,50,60,60,60];
//print_r(array_unique($a));

$arr=[];
for($i=0;$i<count($a);$i++){
if(!in_array($a[$i],$arr)){
  $arr[] = $a[$i];
}
}


$keys = [];
for($i=0;$i<count($a);$i++){
	$keys[$a[$i]] = $a[$i];
}

print_r($keys);

$arr3=array_flip(array_flip(array_values($a)));
print_r($arr3);



