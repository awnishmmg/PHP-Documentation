<?php
//wap in php to show foreach Array

$data=[

[
  'id'=>'1',
  'name'=>'Ravi',
  'class'=>'12th'
],

[
  'id'=>'2',
  'name'=>'Azar',
  'class'=>'LKG'
],

[
  'id'=>'3',
  'name'=>'Chandni',
  'class'=>'nursery'
],

];


foreach($data as $user){

echo "---------------------- \n ";
echo "user id = {$user['id']} \n ";
echo "user name = {$user['name']} \n ";
echo "user class = {$user['class']} \n ";
echo "---------------------- \n ";

}