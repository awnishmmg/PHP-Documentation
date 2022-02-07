<?php

#echo getType($_REQUEST);
#print_r($_REQUEST); #super global variable (predefined in PHP)

$name = $_REQUEST['name'];
#echo $name;

//Hy Welcome ! Mr. Awnish
printf("Hy Welcome ! Mr. %s",$name);



?>