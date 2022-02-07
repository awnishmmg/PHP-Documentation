<?php

//wap in php to connect to mysql database

define('HOST','localhost:3308');
define('USER','root');
define('PASSWORD','');
define('DBNAME','app2021');

$conn = mysqli_connect(HOST,USER,PASSWORD,DBNAME);
print_r($conn);




