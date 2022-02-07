<?php


//Scanner function
function input($msg=''){

if($msg==''){
  exit('The Message is required'); //echo 'The Message is required' and exit;
}

echo $msg;
$input = fgets(STDIN,1024);
return trim($input);

}
echo input();




